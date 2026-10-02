<section id="faq" class="clinic-section">
    <div class="container">

        <span class="clinic-eyebrow">
            FREQUENTLY ASKED
        </span>

        <h2 class="mb-5">
            The questions we get asked most.
        </h2>

        <div class="row g-5">

            <div class="col-12 col-lg-6">

                @php
                    $faqLeft = [
                        [
                            'id' => 'faq1',
                            'question' => 'Who qualifies for a free engagement?',
                            'answer' => 'Small businesses under 200 employees, 501(c)(3) nonprofits, Oregon K–12 districts, municipalities, and similar community organizations in Southern Oregon may qualify. Other areas may be considered when student capacity allows.'
                        ],
                        [
                            'id' => 'faq2',
                            'question' => 'Are students touching my real systems?',
                            'answer' => 'Only with written authorization and only against systems you explicitly approve. Faculty supervise the work, and destructive activity is not performed.'
                        ],
                        [
                            'id' => 'faq3',
                            'question' => 'Will you sign an NDA?',
                            'answer' => 'The standard engagement agreement includes confidentiality provisions. Alternative NDA arrangements may be considered subject to Oregon Tech review.'
                        ],
                        [
                            'id' => 'faq4',
                            'question' => 'How long does an engagement take?',
                            'answer' => 'A typical engagement runs approximately 8 to 12 weeks from kickoff through final briefing.'
                        ],
                    ];

                    $faqRight = [
                        [
                            'id' => 'faq5',
                            'question' => 'What does the deliverable look like?',
                            'answer' => 'Clients receive a written report with an executive summary, findings, prioritized risks, remediation recommendations, and supporting material, along with a final briefing.'
                        ],
                        [
                            'id' => 'faq6',
                            'question' => 'Do you fix the things you find?',
                            'answer' => 'The clinic focuses on assessment and recommendations rather than paid remediation work. Organizations may use the findings to guide internal teams or outside providers.'
                        ],
                        [
                            'id' => 'faq7',
                            'question' => 'How do students protect my data?',
                            'answer' => 'Training uses synthetic environments, and real engagement materials are handled through faculty-controlled processes designed to minimize unnecessary exposure.'
                        ],
                        [
                            'id' => 'faq8',
                            'question' => "I'm a student. How do I join?",
                            'answer' => 'Email cybersecurityclinic@oit.edu with your major, year, and a short note about your interest in participating in the clinic.'
                        ],
                    ];
                @endphp

                @foreach($faqLeft as $faq)

                    <div class="clinic-faq-item">

                        <button class="clinic-faq-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#{{ $faq['id'] }}"
                                aria-expanded="false"
                                aria-controls="{{ $faq['id'] }}">

                            <span>{{ $faq['question'] }}</span>

                            <span class="clinic-faq-icon"></span>

                        </button>

                        <div class="collapse"
                            id="{{ $faq['id'] }}">

                            <div class="clinic-faq-answer">
                                {{ $faq['answer'] }}
                            </div>

                        </div>

                    </div>

                @endforeach

            </div>


            <div class="col-12 col-lg-6">

                @foreach($faqRight as $faq)

                    <div class="clinic-faq-item">

                        <button class="clinic-faq-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#{{ $faq['id'] }}"
                                aria-expanded="false"
                                aria-controls="{{ $faq['id'] }}">

                            <span>{{ $faq['question'] }}</span>

                            <span class="clinic-faq-icon"></span>

                        </button>

                        <div class="collapse"
                            id="{{ $faq['id'] }}">

                            <div class="clinic-faq-answer">
                                {{ $faq['answer'] }}
                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

        <div class="text-end mt-4">
            <a href="#top" class="back-to-top-link">
                Back to top ↑
            </a>
        </div>

    </div>
</section>