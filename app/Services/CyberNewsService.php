<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class CyberNewsService
{
    public function getNews(): array
    {
        return Cache::remember('cyber-news', now()->addMinutes(30), function () {

            $feeds = [
                'Cybersecurity Source' => 'https://thehackernews.com/feeds/posts/default?alt=rss',
            ];

            $articles = [];

            foreach ($feeds as $source => $url) {
                try {
                    $response = Http::timeout(10)->get($url);

                    if (! $response->successful()) {
                        continue;
                    }

                    $xml = simplexml_load_string($response->body());

                    if (! $xml) {
                        continue;
                    }

                    // RSS 2.0
                    if (isset($xml->channel->item)) {
                        foreach ($xml->channel->item as $item) {
                            $articles[] = [
                                'title' => (string) $item->title,
                                'link' => (string) $item->link,
                                'description' => trim(
                                    strip_tags((string) $item->description)
                                ),
                                'date' => (string) $item->pubDate,
                                'source' => $source,
                            ];
                        }
                    }

                    // Atom feeds
                    elseif (isset($xml->entry)) {
                        foreach ($xml->entry as $item) {

                            $link = '';

                            foreach ($item->link as $linkNode) {
                                $attributes = $linkNode->attributes();

                                if (
                                    !isset($attributes['rel']) ||
                                    (string) $attributes['rel'] === 'alternate'
                                ) {
                                    $link = (string) $attributes['href'];
                                    break;
                                }
                            }

                            $articles[] = [
                                'title' => (string) $item->title,
                                'link' => $link,
                                'description' => trim(
                                    strip_tags(
                                        (string) ($item->summary ?? $item->content ?? '')
                                    )
                                ),
                                'date' => (string) ($item->updated ?? $item->published ?? ''),
                                'source' => $source,
                            ];
                        }
                    }

                } catch (\Throwable $e) {
                    report($e);
                }
            }

            usort($articles, function ($a, $b) {
                return strtotime($b['date'] ?? '') <=> strtotime($a['date'] ?? '');
            });

            return array_slice($articles, 0, 8);
        });
    }
}