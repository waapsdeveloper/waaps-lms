<template>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Multi-steps-->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep"
            id="kt_stepper_onboarding">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
                <div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center"
                    style="background-image: url(assets/media/misc/auth-bg.png)">
                    <!--begin::Header-->
                    <div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
                        <!--begin::Logo-->
                        <a href="../../demo1/dist/index.html">
                            <img alt="Logo" src="/assets/media/logos/custom-1.png" class="h-70px" />
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="d-flex flex-row-fluid justify-content-center p-10">
                        <!--begin::Nav-->
                        <div class="stepper-nav">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon rounded-3">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Account Type</h3>
                                        <div class="stepper-desc fw-normal">
                                            Select your account type
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon rounded-3">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Account Settings</h3>
                                        <div class="stepper-desc fw-normal">
                                            Setup your account settings
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Professional Details</h3>
                                        <div class="stepper-desc fw-normal">
                                            Setup your Professional details
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Time Sshedule</h3>
                                        <div class="stepper-desc fw-normal">
                                            Setup yor time schedule
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <div class="stepper-line h-40px"></div>
                            </div>
                            <!--end::Step 4-->

                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">5</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Finish</h3>
                                        <div class="stepper-desc fw-normal">
                                            Your account is created
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="d-flex flex-center flex-wrap px-5 py-10">
                        <!--begin::Links-->
                        <div class="d-flex fw-normal">
                            <a href="https://keenthemes.com" class="text-success px-5" target="_blank">Terms</a>
                            <a href="https://devs.keenthemes.com" class="text-success px-5" target="_blank">Plans</a>
                            <a href="https://1.envato.market/EA4JP" class="text-success px-5" target="_blank">Contact Us</a>
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Footer-->
                </div>
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form"
                            data-kt-redirect-url="../../demo1/dist/account/overview.html">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold d-flex align-items-center text-dark">
                                            Choose Account Type
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Billing is issued based on your selected account type"></i>
                                        </h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Option-->
                                                <input type="radio" class="btn-check" name="account_type" value="personal"
                                                    checked="checked" id="kt_create_account_form_account_type_personal" />
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10"
                                                    for="kt_create_account_form_account_type_personal">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                                    <span class="svg-icon svg-icon-3x me-5">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                                                fill="currentColor" />
                                                            <path opacity="0.3"
                                                                d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-block fw-semibold text-start">
                                                        <span class="text-dark fw-bold d-block fs-4 mb-2">Internee
                                                            Account</span>
                                                        <span>Press Continue, to become a Internee</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Option-->
                                                <input type="radio" class="btn-check" name="account_type" value="corporate"
                                                    id="kt_create_account_form_account_type_corporate" />
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center"
                                                    for="kt_create_account_form_account_type_corporate">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                    <span class="svg-icon svg-icon-3x me-5">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-block fw-semibold text-start">
                                                        <span class="text-dark fw-bold d-block fs-4 mb-2">Instructor
                                                            Account</span>
                                                        <span>Press Continue, to become a Instructor</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Account setting</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">
                                            complete your Account setting
                                            <a href="#" class="link-primary fw-bold">Help Page</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->

                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label mb-3 required">Qualification</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="qualification" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>


                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label mb-3 required">Cv Link</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="cv_link" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>


                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label mb-3 required">Phone no</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="number" class="form-control form-control-lg form-control-solid"
                                            name="Phone_no" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>


                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label mb-3 required">CNIC</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="number" class="form-control form-control-lg form-control-solid"
                                            name="cnic" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>

                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label mb-3 required">Address</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="address" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Professional Details</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">
                                            Complete your Professional Details
                                            <a href="#" class="link-primary fw-bold">Help Page</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Expected Technology</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="expected_technology"
                                            class="form-control form-control-lg form-control-solid" value="" />
                                        <!--end::Input-->
                                    </div>



                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Previous Experience Technologies</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="previous_experience_technologies"
                                            class="form-control form-control-lg form-control-solid" value="" />
                                        <!--end::Input-->
                                    </div>



                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Previous Experience Technologies <i>(no.of
                                                years)</i></label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="previous_experience_technologies_years"
                                            class="form-control form-control-lg form-control-solid" value="" />
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Time Schedules</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">
                                            complete your Time Schedules
                                            <a href="#" class="text-primary fw-bold">Help Page</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">Your Expected Joining Date To Start</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Specify a card holder's name"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="joining_date" value="" />
                                    </div>


                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">Time Schedule</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Specify a card holder's name"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="time_shedule" value="" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->

                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->

                                        <!--end::Col-->
                                        <!--begin::Col-->

                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-8 pb-lg-10">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Your Are Done!</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">
                                            Your detail has been in review,<br>
                                            verification Email be sent soon.
                                            <!-- <a
                        href="../../demo1/dist/authentication/sign-in/basic.html"
                        class="link-primary fw-bold"
                        >Sign In</a
                      >. -->
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="mb-0">
                                        <!--begin::Text-->
                                        <!-- <div class="fs-6 text-gray-600 mb-5">
                      Writing headlines for blog posts is as much an art as it
                      is a science and probably warrants its own post, but for
                      all advise is with what works for your great &amp; amazing
                      audience.
                    </div> -->
                                        <!--end::Text-->
                                        <!--begin::Alert-->
                                        <!--begin::Notice-->
                                        <div
                                            class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                        fill="currentColor" />
                                                    <rect x="11" y="14" width="7" height="2" rx="1"
                                                        transform="rotate(-90 11 14)" fill="currentColor" />
                                                    <rect x="11" y="17" width="2" height="2" rx="1"
                                                        transform="rotate(-90 11 17)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <!--begin::Content-->
                                                <div class="fw-semibold">
                                                    <h1 class="text-gray-900 fw-bold">
                                                        We need your attention!
                                                    </h1>
                                                    <div class="fs-6 text-gray-700 " style="margin-left: 110px;">
                                                        <h2>Registration Fees is Rs.1500/- </h2>
                                                        <h4> <a href="#" class="fw-bold"> Send Before Joining Date</a></h4>
                                                    </div>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                        <!--end::Alert-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-15">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous" @click="gotopreviousStep()">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
                                                    fill="currentColor" />
                                                <path
                                                    d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Previous
                                    </button>
                                </div>
                                <div>
                                    <!-- Your existing template -->

                                    <button type="button" @click="submitForm" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">
                                            Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" @click="gotoNextStep()" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="next">
                                        Continue
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-4 ms-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                    transform="rotate(-180 18 13)" fill="currentColor" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </div>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Multi-steps-->
    </div>
</template>

<!-- Your existing script -->

<script>
import Base from "./base.vue";
import { reactive, ref } from "vue";

export default {
    extends: Base,
    name: "onboarding",
    setup() {
        let pageNav = ref({
            step: 1,
        });

        let stepper = ref(null);

        // Data for form fields
        let formData = ref({
            accountType: [],  // Add other form fields here
            qualification: [],
            cvLink: [],
            phoneNo: [],
            cnic: [],
            address: [],
            expectedTechnology: [],
            previousExperienceTechnologies: [],
            previousExperienceTechnologiesYears: [],
            joiningDate: [],
            timeShedule: []
        });

        let auth = ref({
            accountType: "",  // Add other form fields here
            qualification: "",
            cvLink: "",
            phoneNo: "",
            cnic: "",
            address: "",
            expectedTechnology: "",
            previousExperienceTechnologies: "",
            previousExperienceTechnologiesYears: "",
            joiningDate: "",
            timeShedule: ""
        });
        console.log("noor", formData)
        return {
            pageNav,
            stepper,
            formData,
            auth,
        };
    },
    mounted() {
        let element = document.querySelector("#kt_stepper_onboarding");
        this.stepper = new KTStepper(element);
    },
    methods: {
        validate: function(e){
            e.preventDefault();
            this.formData = {
                accountType: [],  // Add other form fields here
            qualification: [],
            cvLink: [],
            phoneNo: [],
            cnic: [],
            address: [],
            expectedTechnology: [],
            previousExperienceTechnologies: [],
            previousExperienceTechnologiesYears: [],
            joiningDate: [],
            timeShedule: []
            }
        },
        gotoNextStep() {
            if (this.stepper) {
                this.stepper.goNext();
            }
        },
        gotopreviousStep() {
            if (this.stepper) {
                this.stepper.goPrevious();
            }
        },
        submitForm() {
            // Log the form data to the console
            console.log("Form Data:", this.formData);

            // You can add your logic to send the form data to the server here
        },
    },
};
</script>

<style></style>
