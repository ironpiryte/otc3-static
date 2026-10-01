@php
    $slides = [
        [
            'image' => 'storage/clinic/action/event-team-aiage.jpg',
            'alt' => 'Oregon Tech cybersecurity students participating in an event',
            'caption' => 'Students putting cybersecurity skills into practice',
        ],
        [
            'image' => 'storage/clinic/action/event-award-winners.jpg',
            'alt' => 'Oregon Tech cybersecurity students receiving awards',
            'caption' => 'Learning through collaboration and competition',
        ],
        [
            'image' => 'storage/clinic/action/event-workshop-presenting.jpg',
            'alt' => 'Oregon Tech students presenting a cybersecurity workshop',
            'caption' => 'Sharing cybersecurity knowledge with the community',
        ],
        [
            'image' => 'storage/clinic/action/event-thankyou.jpg',
            'alt' => 'Oregon Tech cybersecurity students at a community event',
            'caption' => 'Building connections throughout Southern Oregon',
        ],
        [
            'image' => 'storage/clinic/action/event-students-engaged.jpg',
            'alt' => 'Oregon Tech students participating in a cybersecurity activity',
            'caption' => 'Hands-on learning beyond the classroom',
        ],
        [
            'image' => 'storage/clinic/action/event-cyber-lab.jpg',
            'alt' => 'Students working inside the Oregon Tech cybersecurity lab',
            'caption' => 'Training in the Oregon Tech cybersecurity lab',
        ],
        [
            'image' => 'storage/clinic/action/event-lab-tour.jpg',
            'alt' => 'Visitors touring the Oregon Tech cybersecurity lab',
            'caption' => 'Introducing students and visitors to cybersecurity technology',
        ],
        [
            'image' => 'storage/clinic/action/event-conference-team.jpg',
            'alt' => 'Oregon Tech cybersecurity students attending a conference',
            'caption' => 'Representing Oregon Tech at cybersecurity events',
        ],
    ];
@endphp


<section id="in-action" class="clinic-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="clinic-eyebrow">
                OTC³ IN ACTION
            </span>

            <h2>
                Real students. Real community. Real impact.
            </h2>

            <p class="clinic-centered-copy">
                From community workshops to competitions and hands-on
                cybersecurity projects, Oregon Tech students are putting
                their skills to work.
            </p>

        </div>


        <div id="clinicActionCarousel"
             class="carousel slide carousel-fade clinic-carousel"
             data-bs-ride="carousel"
             data-bs-interval="5000">

            <!-- INDICATORS -->
            <div class="carousel-indicators">

                @foreach($slides as $index => $slide)

                    <button
                        type="button"
                        data-bs-target="#clinicActionCarousel"
                        data-bs-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}"
                        aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                        aria-label="Slide {{ $index + 1 }}">
                    </button>

                @endforeach

            </div>


            <!-- SLIDES -->
            <div class="carousel-inner">

                @foreach($slides as $index => $slide)

                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">

                        <img
                            src="{{ asset($slide['image']) }}"
                            class="d-block w-100"
                            alt="{{ $slide['alt'] }}">

                        <div class="carousel-caption">
                            <h5>{{ $slide['caption'] }}</h5>
                        </div>

                    </div>

                @endforeach

            </div>


            <!-- PREVIOUS -->
            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#clinicActionCarousel"
                    data-bs-slide="prev">

                <span class="carousel-control-prev-icon"
                      aria-hidden="true">
                </span>

                <span class="visually-hidden">
                    Previous
                </span>

            </button>


            <!-- NEXT -->
            <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#clinicActionCarousel"
                    data-bs-slide="next">

                <span class="carousel-control-next-icon"
                      aria-hidden="true">
                </span>

                <span class="visually-hidden">
                    Next
                </span>

            </button>

        </div>

    </div>

</section>