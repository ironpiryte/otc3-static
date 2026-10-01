<section id="platform" class="clinic-platform-section">
    <div class="container">

        <div class="mb-5">
            <span class="clinic-eyebrow">
                POWERED BY CLINIC-IN-A-BOX
            </span>

            <h2>
                The platform our students train on.
            </h2>

            <p class="clinic-platform-intro">
                Before they touch a real client, every OTC³ student completes
                full assessments on synthetic organizations generated through
                our open-source Clinic-in-a-Box training platform.
                Explore the previews below to see how the workflow works.
            </p>
        </div>


        @php
            $platformCards = [
                [
                    'label' => 'DASHBOARD',
                    'title' => 'Student dashboard',
                    'description' => 'Track active engagements, completed assessments, and practice hours at a glance.',
                    'class' => 'platform-dashboard',
                    'url' => '#'
                ],
                [
                    'label' => 'CLIENT PROFILE',
                    'title' => 'Synthetic client profile',
                    'description' => 'Realistic Southern Oregon–flavored organizations with full IT environments and stakeholder personas.',
                    'class' => 'platform-profile',
                    'url' => '#'
                ],
                [
                    'label' => 'GENERATE',
                    'title' => 'Profile generator',
                    'description' => 'Instructors generate new practice clients on demand using configurable AI or offline workflows.',
                    'class' => 'platform-generator',
                    'url' => '#'
                ],
                [
                    'label' => 'REAL-CLIENT INTAKE',
                    'title' => 'Real-client intake form',
                    'description' => 'How real engagements begin, using an anonymized intake workflow designed to avoid storing unnecessary identifying information.',
                    'class' => 'platform-intake',
                    'url' => '#'
                ],
                [
                    'label' => 'ASSESSMENT WORKSPACE',
                    'title' => '8-part assessment workspace',
                    'description' => 'The structured workflow students complete from orientation through reflection, with faculty review built into the process.',
                    'class' => 'platform-assessment',
                    'url' => '#'
                ],
                [
                    'label' => 'INSTRUCTOR',
                    'title' => 'Instructor dashboard',
                    'description' => 'Faculty review student submissions, manage training artifacts, and oversee the assessment workflow.',
                    'class' => 'platform-instructor',
                    'url' => '#'
                ],
            ];
        @endphp


        <div class="row g-4">

            @foreach($platformCards as $card)

                <div class="col-12 col-md-6 col-lg-4">

                    <article class="platform-card h-100">

                        <div class="platform-preview {{ $card['class'] }}">

                            <div class="platform-mockup">
                                <!-- Decorative preview generated with CSS -->
                            </div>

                            <span class="platform-preview-label">
                                {{ $card['label'] }}
                            </span>

                        </div>


                        <div class="platform-card-body">

                            <h4>
                                {{ $card['title'] }}
                            </h4>

                            <p>
                                {{ $card['description'] }}
                            </p>

                            <a href="{{ $card['url'] }}"
                            class="platform-preview-link">
                                Open preview →
                            </a>

                        </div>

                    </article>

                </div>

            @endforeach

        </div>

    </div>
</section>