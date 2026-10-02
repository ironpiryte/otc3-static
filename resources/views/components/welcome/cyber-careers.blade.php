<div class="row mb-4 d-flex justify-content-center" id="cyber-careers">
    <div class="col-12 col-md-10">

        <div class="text-center mb-4">
            <h3>Cybersecurity Careers</h3>

            <p class="text-muted">
                Explore current opportunities in cybersecurity,
                information security, networking, and related fields.
            </p>
        </div>

        <div class="row g-3">

          @forelse($jobs as $job)

            <div class="col-12 col-md-6 col-lg-4">

                <article class="cyber-job-card h-100">

                    <h5>
                        {{ $job['title'] }}
                    </h5>

                    @if(!empty($job['location']))
                        <p class="job-location mb-1">
                            📍 {{ $job['location'] }}
                        </p>
                    @endif

                    @if(!empty($job['employment_type']))
                        <p class="job-type mb-1">
                            {{ $job['employment_type'] }}
                        </p>
                    @endif

                    @if(!empty($job['salary']))
                        <p class="job-salary mb-1">
                            {{ $job['salary'] }}
                        </p>
                    @endif

                    @if(!empty($job['posted']))
                        <p class="job-posted">
                            Posted {{ $job['posted'] }}
                        </p>
                    @endif

                    <a href="{{ $job['url'] }}"
                      target="_blank"
                      rel="noopener"
                      class="degree-link">

                        View Position →
                    </a>

                </article>

            </div>

          @empty

              <p class="text-center text-muted">
                  No current cybersecurity job listings are available.
              </p>

          @endforelse
            
        </div>

        <div class="text-end mt-4">
            <a href="#top" class="back-to-top-link">
                Back to top ↑
            </a>
        </div>

    </div>

</div>