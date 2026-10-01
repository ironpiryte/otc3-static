<x-layout>

  <div class="row g-0 align-items-stretch bg-dark-blue hero-row">

    <div class="hero-wrapper">
      <img src="{{ asset('storage/full-hero-banner-desktop.png') }}"
          class="hero-desktop img-fluid w-100"
          alt="Cyber Defense Center Banner">

      <img src="{{ asset('storage/full-hero-banner-mobile.png') }}"
          class="hero-mobile img-fluid w-100"
          alt="Cyber Defense Center Banner">
    </div>

  </div>

  <nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <span class="nav-link fw-bold" aria-current="page">On this page:</span>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#ot-degrees">Applied Computing Degrees at OREGON TECH</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#student-stories">Student Stories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#cyber-careers">Cybersecurity Careers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-disabled="false" href="#cyber-news">Cybersecurity in the News</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row mt-4 gy-4">
    <!-- Sidebar: Navigation Cards -->
    <div class="col-12 col-md-4 d-flex flex-column align-items-end">
      <div class="card shadow-sm w-50">
        <div class="card-header fw-bold">OREGON TECH Resources</div>
        <div class="list-group list-group-flush">
          <a href="https://www.oit.edu/academics/degrees/cybersecurity" class="list-group-item list-group-item-action clinic-nav-item fw-bold">Cybersecurity Degree Options</a>
          <a href="https://www.oit.edu/academics/degrees/artificial-intelligence" class="list-group-item list-group-item-action clinic-nav-item fw-bold">New Options in AI Degrees</a>
          <a href="https://www.oit.edu/academics/degrees/information-technology" class="list-group-item list-group-item-action clinic-nav-item fw-bold">Information Technology Degrees</a>
          <a href="https://www.oit.edu/academics/engineering-technology-management/applied-computing-geomatics-department/faculty" class="list-group-item list-group-item-action clinic-nav-item fw-bold">Meet the Applied Computing & Geomatics Faculty</a>
          <a href="https://www.oit.edu/college-costs/scholarships" class="list-group-item list-group-item-action clinic-nav-item fw-bold">Scholarships</a>
          <a href="https://www.oit.edu/campus-life/student-organizations" class="list-group-item list-group-item-action clinic-nav-item fw-bold">Clubs & Campus Resources</a>
          <a href="{{ route('cyber-clinic') }}" class="list-group-item list-group-item-action clinic-nav-item fw-bold">Cybersecurity Community Clinic</a>
          <a href="mailto:cybersecurityclinic@oit.edu" class="list-group-item list-group-item-action border border-2 border-warning fw-bold">
            <p class="m-0">Need Help? / Interested?</p>
            <p class="m-0">Contact Us!</p>  
            <p class="m-0">cybersecurityclinic@oit.edu</p>
            </a>
        </div>
      </div> <!-- Closes Card -->
    </div> <!-- Closes Column -->

    <!-- Main Content: Welcome Section -->
    <div class="col-12 col-md-8">
      <h2 class="mb-3">Welcome to the OREGON TECH Cyber Defense Center!</h2>
      <div class="row align-items-start">
        <div class="col-lg-6">
          <p class="lead">This is a place for current and prospective students to learn about Cybersecurity while protecting the businesses and citizens of our community.</p>
          <p>
            The Oregon Tech Cyber Defense Center connects students, faculty, and community partners through hands-on cybersecurity education and service. As part of the Consortium of Cybersecurity Clinics, Oregon Tech is helping expand the cybersecurity clinic model in Oregon by giving students the opportunity to apply what they learn in the classroom to real-world security challenges.
          </p>
          <p>
            Oregon Tech is proud to be the first university in Oregon to establish a Cybersecurity Community Clinic as part of the Consortium of Cybersecurity Clinics, bringing this nationally growing model of experiential cybersecurity education and community service to the state.
          </p>
          <p>
            Oregon Tech is helping expand the cybersecurity clinic model in Oregon by giving students the opportunity to apply what they learn in the classroom to real-world security challenges.
            Through the Cybersecurity Community Clinic, students work alongside faculty mentors to support local small businesses, nonprofit organizations, and community partners. Projects may include cybersecurity risk assessments, security awareness, policy development, vulnerability identification, and guidance on implementing practical security frameworks and best practices.
          </p>
          <p>
            The clinic is designed to strengthen both the community and the next generation of cybersecurity professionals. Students gain meaningful experience working with real organizations, while participating clients receive accessible cybersecurity support that can help improve their security posture and resilience.
          </p>
        </div>
        <div class="col-lg-4 me-3 text-center">
          <img src="{{ asset( 'storage/cyberdefensecenter.png' ) }}"
              class="img-fluid rounded shadow-sm"
              alt="OREGON TECH Cyber Defense Center Logo">
          <a href="https://cybersecurityclinics.org/"
            target="_blank"
            class="mt-3 pt-3 d-block fw-bold text-decoration-none"
            rel="noopener">
              Learn more about the Consortium of Cybersecurity Clinics →
          </a>
        </div>
      </div>
    </div> 
  </div> 

  <div class="row mb-2 gy-0 d-flex justify-content-center" id="ot-degrees">
    <div class="col-12 col-md-10 mx-auto mb-4 degree-section">

    <div class="text-center mb-4">
        <h3 class="degree-section-title">
            Applied Computing Degrees at OREGON TECH
        </h3>
        <p class="text-muted mb-0">
            Explore hands-on programs preparing students for careers in technology.
        </p>
    </div>

    <!-- CYBERSECURITY -->
    <section class="degree-feature">
        <div class="row align-items-center g-4">

            <div class="col-12 col-md-4 text-center">
                <img src="{{ asset('storage/Cyber-image.jpg') }}"
                     class="degree-image"
                     alt="Cybersecurity students securing network devices">
            </div>

            <div class="col-12 col-md-8">
                <h4 class="degree-title">
                    Cybersecurity
                </h4>

                <a href="https://www.oit.edu/academics/degrees/cybersecurity"
                   class="degree-link"
                   target="_blank"
                   rel="noopener">
                    Explore Oregon Tech's Cybersecurity Program
                    <span aria-hidden="true">→</span>
                </a>

                <p>
                    Cybersecurity education prepares students to understand how modern
                    systems are attacked, defended, and secured. Coursework can explore
                    networking, system administration, secure computing, digital forensics,
                    risk management, and the tools used by security professionals.
                </p>

                <p class="mb-0">
                    Hands-on labs are especially important because cybersecurity is learned
                    by doing. Students can practice identifying vulnerabilities, analyzing
                    suspicious activity, strengthening systems, and responding to simulated
                    security incidents in a controlled environment.
                </p>
            </div>

        </div>
    </section>


    <!-- ARTIFICIAL INTELLIGENCE -->
    <section class="degree-feature">
        <div class="row align-items-center g-4">

            <div class="col-12 col-md-4 text-center">
                <img src="{{ asset('storage/AI-image.jpg') }}"
                     class="degree-image"
                     alt="Student developing an artificial intelligence model">
            </div>

            <div class="col-12 col-md-8">
                <h4 class="degree-title">
                    Artificial Intelligence
                </h4>

                <a href="https://www.oit.edu/academics/degrees/artificial-intelligence"
                   class="degree-link"
                   target="_blank"
                   rel="noopener">
                    Explore Oregon Tech's Artificial Intelligence Program
                    <span aria-hidden="true">→</span>
                </a>

                <p>
                    Artificial intelligence combines computer science, mathematics, data,
                    and software development to create systems capable of recognizing
                    patterns, making predictions, and assisting with complex decisions.
                </p>

                <p class="mb-0">
                    Students exploring AI can develop skills in machine learning, data
                    analysis, programming, automation, and responsible AI development.
                    These skills can be applied across fields ranging from cybersecurity
                    and healthcare to manufacturing, engineering, and business.
                </p>
            </div>

        </div>
    </section>


    <!-- INFORMATION TECHNOLOGY -->
    <section class="degree-feature degree-feature-last">
        <div class="row align-items-center g-4">

            <div class="col-12 col-md-4 text-center">
                <img src="{{ asset('storage/network-storage.jpg') }}"
                     class="degree-image"
                     alt="Information technology networking and infrastructure">
            </div>

            <div class="col-12 col-md-8">
                <h4 class="degree-title">
                    Information Technology
                </h4>

                <a href="YOUR-OIT-INFORMATION-TECHNOLOGY-URL"
                   class="degree-link"
                   target="_blank"
                   rel="noopener">
                    Explore Oregon Tech's Information Technology Program
                    <span aria-hidden="true">→</span>
                </a>

                <p>
                    Cybersecurity and AI both reward practical experience, and students can
                    build many of those same skills through Information Technology.
                    Projects, labs, internships, competitions, and collaborative problem
                    solving help connect technical concepts with real-world applications.
                </p>

                <p class="mb-0">
                    Graduates with skills in these areas can pursue careers across
                    technology, government, healthcare, finance, infrastructure,
                    manufacturing, and other industries that depend on secure and
                    intelligent computing systems.
                </p>
            </div>

        </div>
    </section>

  </div>
  <div class="row mb-2 d-flex justify-content-center" id="student-stories">
    <div class="col-12 col-md-10 mx-auto mb-4 degree-section">

        <div class="text-center mb-4">
            <h3 class="degree-section-title">
                Student Life at OREGON TECH
            </h3>

            <p class="text-muted mb-0">
                Get involved, build your skills, and make an impact through clubs,
                camps, and community service.
            </p>
        </div>


        <!-- TECH CLUBS -->
        <section class="degree-feature">
            <div class="row align-items-center g-4">

                <div class="col-12 col-md-4 text-center">
                    <img src="{{ asset('storage/tech-club.jpg') }}"
                         class="degree-image"
                         alt="Oregon Tech students collaborating in a technology club">
                </div>

                <div class="col-12 col-md-8">

                    <h4 class="degree-title">
                        Tech Clubs & Organizations
                    </h4>

                    <a href="https://www.oit.edu/campus-life/student-organizations"
                       class="degree-link"
                       target="_blank"
                       rel="noopener">
                        Explore Clubs & Student Organizations at Oregon Tech →
                    </a>

                    <p>
                        Technology clubs give students a place to explore interests
                        beyond the classroom, work on collaborative projects, and
                        connect with classmates who share an interest in computing,
                        cybersecurity, programming, networking, artificial intelligence,
                        and emerging technologies.
                    </p>

                    <p class="mb-0">
                        Club activities can provide opportunities to build projects,
                        participate in competitions, attend workshops, practice technical
                        skills, and develop leadership experience while becoming part of
                        Oregon Tech's technology community.
                    </p>

                </div>
            </div>
        </section>


        <!-- SUMMER CAMPS -->
        <section class="degree-feature">
            <div class="row align-items-center g-4">

                <div class="col-12 col-md-4 text-center">
                    <img src="{{ asset('storage/cyber-camp.png') }}"
                         class="degree-image"
                         alt="Students participating in a hands-on Oregon Tech summer camp">
                </div>

                <div class="col-12 col-md-8">

                    <h4 class="degree-title">
                        Summer Camps & Outreach
                    </h4>

                    <a href="https://www.oit.edu/academics/pre-college-programs/summer-camp"
                       class="degree-link"
                       target="_blank"
                       rel="noopener">
                        Explore Oregon Tech Summer Programs →
                    </a>

                    <p>
                        Summer camps and outreach programs introduce middle and high
                        school students to technology through hands-on activities,
                        problem solving, and project-based learning. Students can explore
                        areas such as cybersecurity, artificial intelligence, programming,
                        robotics, and other STEM fields.
                    </p>

                    <p class="mb-0">
                        These experiences help young learners build confidence, develop
                        technical skills, meet mentors, and discover how their interests
                        can connect to college programs and future technology careers.
                    </p>

                </div>
            </div>
        </section>


        <!-- COMMUNITY CLINIC -->
        <section class="degree-feature degree-feature-last">
            <div class="row align-items-center g-4">

                <div class="col-12 col-md-4 text-center">
                    <img src="{{ asset('storage/community-clinic.jpg') }}"
                         class="degree-image"
                         alt="Oregon Tech cybersecurity students working with a community partner">
                </div>

                <div class="col-12 col-md-8">

                    <h4 class="degree-title">
                        Cybersecurity Community Clinic
                    </h4>

                    <a href="#"
                       class="degree-link"
                       target="_blank"
                       rel="noopener">
                        Learn About the Oregon Tech Cybersecurity Community Clinic →
                    </a>

                    <p>
                        The Cybersecurity Community Clinic gives Oregon Tech students
                        the opportunity to apply classroom knowledge to real-world
                        security challenges while serving local small businesses,
                        nonprofit organizations, and community partners.
                    </p>

                    <p class="mb-0">
                        Working alongside faculty mentors, students can help with
                        cybersecurity risk assessments, security awareness, policy
                        development, vulnerability identification, and practical
                        security recommendations. The clinic combines experiential
                        learning with community service while helping organizations
                        strengthen their cybersecurity posture.
                    </p>

                </div>
            </div>
        </section>

    </div>
  </div>
  <!-- Cybersecurity Careers Section -->
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
    </div>
  </div>
  <!-- Cybersecurity News Section -->
  <div class="row mb-4 d-flex justify-content-center" id="cyber-news">
    <div class="col-12 col-md-10">

        <div class="text-center mb-4">
            <h3>Cybersecurity in the News</h3>
            <p class="text-muted">
                Recent cybersecurity news, alerts, vulnerabilities, and industry developments.
            </p>
        </div>

        <div class="row g-3">

            @forelse($news as $article)

                <div class="col-12 col-md-6">
                    <article class="cyber-news-card h-100">

                        <small class="news-source">
                            {{ $article['source'] }}
                        </small>

                        <h5>{{ $article['title'] }}</h5>

                        <p>
                            {{ \Illuminate\Support\Str::limit($article['description'], 180) }}
                        </p>

                        <a href="{{ $article['link'] }}"
                           target="_blank"
                           rel="noopener"
                           class="degree-link">
                            Read Article →
                        </a>

                    </article>
                </div>

            @empty

                <p class="text-center text-muted">
                    Cybersecurity news is temporarily unavailable.
                </p>

            @endforelse

        </div>

    </div>
  </div>

</x-layout>
