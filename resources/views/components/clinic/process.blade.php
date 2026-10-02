<section class="clinic-process" id="process">
    <div class="container">

        <span class="clinic-eyebrow text-warning">
            HOW AN ENGAGEMENT WORKS
        </span>

        <h2 class="text-white">
            Four phases. Eight to twelve weeks.<br>
            One clear deliverable.
        </h2>

        <div class="row g-4 mt-4">

            @php
                $phases = [
                    [
                        'number' => '01',
                        'title' => 'Intake & scoping',
                        'text' => 'You submit an anonymized intake. We review the organization and engagement goals, confirm fit, and establish the scope.'
                    ],
                    [
                        'number' => '02',
                        'title' => 'Discovery & interviews',
                        'text' => 'Students conduct stakeholder interviews and approved scans using industry-standard cybersecurity tools.'
                    ],
                    [
                        'number' => '03',
                        'title' => 'Analysis & reporting',
                        'text' => 'Findings are mapped to the CIS Controls IG1 framework and prioritized by likelihood and impact.'
                    ],
                    [
                        'number' => '04',
                        'title' => 'Briefing & handoff',
                        'text' => 'The team briefs organizational leadership, provides the final report and supporting materials, and answers questions.'
                    ]
                ];
            @endphp

            @foreach($phases as $phase)

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="clinic-phase-card h-100">

                        <div class="phase-number">
                            {{ $phase['number'] }}
                        </div>

                        <h4>{{ $phase['title'] }}</h4>

                        <p>{{ $phase['text'] }}</p>

                    </div>
                </div>

            @endforeach

        </div>

    </div>

    <x-clinic.metrix />

    <div class="text-end mt-4 me-5">
        <a href="#top" class="back-to-top-link">
            Back to top ↑
        </a>
    </div>

</section>