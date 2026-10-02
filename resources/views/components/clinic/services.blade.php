<section id="services" class="clinic-section">
    <div class="container">

        <span class="clinic-eyebrow">
            WHAT WE OFFER
        </span>

        <h2>
            Six services. All free for qualifying organizations.
        </h2>

        @php
            $services = [
                ['01', 'Cybersecurity risk assessment',
                'Review of cybersecurity posture against the CIS Controls IG1 framework with a written risk register and remediation roadmap.'],

                ['02', 'Policy review & drafting',
                'Review or development of policies covering acceptable use, passwords, incident response, backups, vendor management, and related areas.'],

                ['03', 'Vulnerability scanning',
                'Authorized internal and external vulnerability scanning using industry-standard tools.'],

                ['04', 'Tabletop exercises',
                'Facilitated incident-response exercises for organizational leadership with a written after-action report.'],

                ['05', 'Security awareness training',
                'Practical training covering phishing, password hygiene, incident reporting, and other common security risks.'],

                ['06', 'Vendor & third-party review',
                'Structured review of vendor relationships and security posture with reusable risk documentation.'],
            ];
        @endphp

        <div class="row g-4 mt-4">

            @foreach($services as $service)

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="clinic-service-card h-100">

                        <span class="service-number">
                            SVC.{{ $service[0] }}
                        </span>

                        <h4>{{ $service[1] }}</h4>

                        <p>{{ $service[2] }}</p>

                    </div>

                </div>

            @endforeach

        </div>

        <div class="text-end mt-4">
            <a href="#top" class="back-to-top-link">
                Back to top ↑
            </a>
        </div>

    </div>
</section>