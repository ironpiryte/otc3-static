<section class="clinic-get-started" id="get-started">
    <div class="container">

        <div class="text-center mb-5">

            <span class="clinic-eyebrow">
                GET STARTED
            </span>

            <h2>
                Express interest in OTC³ services.
            </h2>

            <p class="clinic-centered-copy">
                If your organization could benefit from cybersecurity
                assistance, tell us a little about your needs. The clinic
                team will review the information and contact you regarding
                next steps.
            </p>

        </div>


        @if(session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif


        <div class="row g-5">

            <div class="col-12 col-lg-5">

                <h3>What happens next</h3>

                <ol class="clinic-next-steps">
                    <li>
                        <strong>You submit this form.</strong>
                        Your inquiry is sent to the OTC³ clinic.
                    </li>

                    <li>
                        <strong>We review your request.</strong>
                        The clinic determines whether the proposed
                        engagement fits current capacity and scope.
                    </li>

                    <li>
                        <strong>You receive the formal intake form.</strong>
                        Additional information is collected for scoping.
                    </li>

                    <li>
                        <strong>An engagement is established.</strong>
                        Accepted organizations complete the appropriate
                        engagement documentation.
                    </li>

                    <li>
                        <strong>Your engagement begins.</strong>
                        Typical engagements run approximately 8–12 weeks.
                    </li>
                </ol>

            </div>


            <div class="col-12 col-lg-7">

                <form method="POST"
                    action="{{ route('cyber-clinic.inquiry') }}"
                    class="clinic-inquiry-form">

                    @csrf

                    <h3>Tell us about your organization</h3>

                    <div class="mb-3">

                        <label class="form-label">
                            Organization name *
                        </label>

                        <input type="text"
                            name="organization_name"
                            value="{{ old('organization_name') }}"
                            class="form-control"
                            required>

                    </div>


                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Your name *
                            </label>

                            <input type="text"
                                name="name"
                                value="{{ old('name') }}"
                                class="form-control"
                                required>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Your role *
                            </label>

                            <input type="text"
                                name="role"
                                value="{{ old('role') }}"
                                class="form-control"
                                required>

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Email *
                            </label>

                            <input type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control"
                                required>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Phone
                            </label>

                            <input type="text"
                                name="phone"
                                value="{{ old('phone') }}"
                                class="form-control">

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Organization type *
                            </label>

                            <select name="organization_type"
                                    class="form-select"
                                    required>

                                <option value="">
                                    -- choose --
                                </option>

                                <option>Small Business</option>
                                <option>Nonprofit</option>
                                <option>K-12 School / District</option>
                                <option>Municipality</option>
                                <option>Other</option>

                            </select>

                        </div>


                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Approximate size *
                            </label>

                            <select name="organization_size"
                                    class="form-select"
                                    required>

                                <option value="">-- choose --</option>
                                <option>1-10</option>
                                <option>11-25</option>
                                <option>26-50</option>
                                <option>51-100</option>
                                <option>101-200</option>
                                <option>200+</option>

                            </select>

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Industry / sector
                            </label>

                            <input type="text"
                                name="industry"
                                value="{{ old('industry') }}"
                                class="form-control">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                City / county *
                            </label>

                            <input type="text"
                                name="location"
                                value="{{ old('location') }}"
                                class="form-control"
                                required>

                        </div>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            What are you looking for? *
                        </label>

                        <textarea name="needs"
                                rows="5"
                                class="form-control"
                                required>{{ old('needs') }}</textarea>

                        <small class="text-muted">
                            Please do not include passwords, network details,
                            or sensitive information.
                        </small>

                    </div>


                    <div class="mb-3">

                        <label class="form-label d-block">
                            Preferred contact method *
                        </label>

                        @foreach(['Email', 'Phone', 'Either'] as $method)

                            <div class="form-check form-check-inline">

                                <input class="form-check-input"
                                    type="radio"
                                    name="contact_method"
                                    value="{{ $method }}"
                                    required>

                                <label class="form-check-label">
                                    {{ $method }}
                                </label>

                            </div>

                        @endforeach

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Timeline *
                        </label>

                        <select name="timeline"
                                class="form-select"
                                required>

                            <option value="">-- choose --</option>
                            <option>As soon as possible</option>
                            <option>Within 1 month</option>
                            <option>1-3 months</option>
                            <option>3-6 months</option>
                            <option>Just exploring</option>

                        </select>

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            How did you hear about us?
                        </label>

                        <input type="text"
                            name="referral"
                            value="{{ old('referral') }}"
                            class="form-control">

                    </div>


                    <button type="submit"
                            class="btn clinic-btn-gold">

                        Send inquiry →

                    </button>

                </form>

            </div>

        </div>

        <div class="text-end mt-4">
            <a href="#top" class="back-to-top-link">
                Back to top ↑
            </a>
        </div>

    </div>

</section>