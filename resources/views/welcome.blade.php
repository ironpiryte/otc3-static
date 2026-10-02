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
                <div class="card-header fw-bold">
                    OREGON TECH Resources
                </div>
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
        <div class="col-12 col-md-8" id="top">
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

    <section class="welcome-section welcome-section-light">
        <x-welcome.ot-degrees />
    </section>

    <section class="welcome-section welcome-section-tint">
        <x-welcome.student-stories />
    </section>

    <section class="welcome-section welcome-section-light">
        <x-welcome.cyber-careers :jobs="$jobs" />
    </section>

    <section class="welcome-section welcome-section-tint">
        <x-welcome.cyber-news :news="$news" />
    </section>

</x-layout>
