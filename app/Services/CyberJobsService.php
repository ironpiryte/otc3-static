<?php

namespace App\Services;

use DOMDocument;
use DOMXPath;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class CyberJobsService
{
    public function getJobs(): array
    {
        return Cache::remember('cyber-jobs', now()->addMinutes(30), function () {

            try {
                $response = Http::timeout(20)
                    ->withHeaders([
                        'HX-Request' => 'true',
                        'X-Screen' => 'D',
                        'User-Agent' => 'Oregon Tech Cyber Defense Center',
                    ])
                    ->get('https://foorilla.com/hiring/jobs/', [
                        'job_search' => 'cybersecurity',
                    ]);

                if (! $response->successful()) {
                    return [];
                }

                return $this->parseJobs($response->body());

            } catch (\Throwable $e) {
                report($e);

                return [];
            }
        });
    }

    private function parseJobs(string $html): array
    {
        libxml_use_internal_errors(true);

        $dom = new DOMDocument();

        $dom->loadHTML(
            '<?xml encoding="UTF-8"><html><body>' .
            $html .
            '</body></html>'
        );

        libxml_clear_errors();

        $xpath = new DOMXPath($dom);

        /*
         * Each actual job is contained in:
         * <li class="list-group-item">
         */
        $jobNodes = $xpath->query(
            '//li[contains(concat(" ", normalize-space(@class), " "), " list-group-item ")]
                [.//a[contains(concat(" ", normalize-space(@class), " "), " terminal-title ")]]'
        );

        $jobs = [];

        foreach ($jobNodes as $jobNode) {

            /*
             * TITLE / LINK
             */
            $titleNode = $xpath->query(
                './/a[contains(concat(" ", normalize-space(@class), " "), " terminal-title ")]',
                $jobNode
            )->item(0);

            if (! $titleNode) {
                continue;
            }

            $title = trim($titleNode->textContent);
            $path = trim($titleNode->getAttribute('hx-get'));

            if (! $title || ! $path) {
                continue;
            }


            /*
             * POSTED TIME
             *
             * First terminal-meta block contains:
             * "7h ago"
             */
            $postedNode = $xpath->query(
                './/div[contains(@class, "terminal-meta")]/small',
                $jobNode
            )->item(0);

            $posted = $postedNode
                ? trim($postedNode->textContent)
                : '';


            /*
             * EMPLOYMENT TYPE
             *
             * Example:
             * [Full Time]
             */
            $employmentType = '';

            $smallNodes = $xpath->query(
                './/small',
                $jobNode
            );

            foreach ($smallNodes as $smallNode) {

                $text = trim($smallNode->textContent);

                if (
                    str_contains($text, 'Full Time') ||
                    str_contains($text, 'Part Time') ||
                    str_contains($text, 'Contract') ||
                    str_contains($text, 'Internship') ||
                    str_contains($text, 'Temporary')
                ) {
                    $employmentType = trim($text, "[] \t\n\r\0\x0B");
                    break;
                }
            }


            /*
             * SALARY
             */
            $salaryNode = $xpath->query(
                './/small[contains(@class, "salary-value")]',
                $jobNode
            )->item(0);

            $salary = $salaryNode
                ? trim($salaryNode->textContent)
                : '';


            /*
             * LOCATION
             *
             * Foorilla places this in:
             * <div class="text-end"><small>...</small></div>
             */
            $locationNode = $xpath->query(
                './/div[contains(concat(" ", normalize-space(@class), " "), " text-end ")]/small',
                $jobNode
            )->item(0);

            $location = $locationNode
                ? trim($locationNode->textContent)
                : '';

            if (! $this->isUnitedStatesJob($location)) {
                continue;
            }

            $jobs[] = [
                'title' => $title,
                'company' => '',
                'location' => $location,
                'employment_type' => $employmentType,
                'salary' => $salary,
                'description' => '',
                'url' => 'https://foorilla.com' . $path,
                'posted' => $posted,
            ];

            /*
             * Keep homepage manageable
             */
            if (count($jobs) >= 9) {
                break;
            }
        }

        return $jobs;
    }

    private function isUnitedStatesJob(string $location): bool
    {
        $location = strtolower(trim($location));

        if ($location === '') {
            return false;
        }

        /*
        * Explicit US wording
        */
        if (
            str_contains($location, 'united states') ||
            str_contains($location, 'usa') ||
            str_contains($location, 'u.s.')
        ) {
            return true;
        }

        /*
        * Remote US positions
        */
        if (
            str_contains($location, 'remote') &&
            (
                str_contains($location, 'us') ||
                str_contains($location, 'united states')
            )
        ) {
            return true;
        }

        /*
        * State abbreviations
        */
        $states = [
            'AL','AK','AZ','AR','CA','CO','CT','DE','FL','GA',
            'HI','ID','IL','IN','IA','KS','KY','LA','ME','MD',
            'MA','MI','MN','MS','MO','MT','NE','NV','NH','NJ',
            'NM','NY','NC','ND','OH','OK','OR','PA','RI','SC',
            'SD','TN','TX','UT','VT','VA','WA','WV','WI','WY',
            'DC'
        ];

        foreach ($states as $state) {
            if (preg_match('/\b' . strtolower($state) . '\b/i', $location)) {
                return true;
            }
        }

        return false;
    }
}