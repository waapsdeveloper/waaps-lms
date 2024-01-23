<template>
    <section>
        <div class="container-fluid mt-5">
            <div class="row">

            <div class="col-lg-6">

                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_profile_details" aria-expanded="true"
                        aria-controls="kt_account_profile_details">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Profile Details</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <!--begin::Form-->
                        <form id="kt_account_profile_details_form" class="form">
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Project</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Country of origination"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <select name="country" aria-label="Select a Country" data-control="select2"
                                            data-placeholder="Sell App"
                                            class="form-select form-select-solid form-select-lg fw-semibold">
                                            <option value="">Select a Country...</option>
                                            <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                            <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                            <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Title</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Phone number must be active"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="tel" name="phone"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Phone number" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Due Date</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <!-- Date Input -->
                                        <input type="date" name="date"
                                            class="form-control form-control-solid form-control-lg fw-semibold mb-3"
                                            placeholder="Select a date..." />
                                    </div>
                                    <!--end::Col-->
                                </div>


                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Start Time</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">

                                        <!-- Time Input -->
                                        <input type="time" name="time"
                                            class="form-control form-control-solid form-control-lg fw-semibold"
                                            placeholder="Select a time..." />
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">End Time</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">

                                        <!-- Time Input -->
                                        <input type="time" name="time"
                                            class="form-control form-control-solid form-control-lg fw-semibold"
                                            placeholder="Select a time..." />
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Assign To</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Country of origination"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <select name="country" aria-label="Select a Country" data-control="select2"
                                            class="form-select form-select-solid form-select-lg fw-semibold">
                                            <option value="">Select a Country...</option>
                                            <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                            <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                            <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                                    Changes</button>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
                <!-- paragraph code heree... -->

                <div class="col-lg-6 card">
        <label for="paragraphInput" class="form-label" style="display: block; margin: 15px; margin-top: 25px;"><h3><b>Enter Guides Here:</b></h3></label>
        <textarea name="paragraph" id="paragraphInput" cols="80" rows="10" class="card mb-5 text-light text-bold card-body border-top p-10" style="height: 500px; width: 888px;">
        </textarea>
</div>



        </div>
    </div>
    </section>
    <section>
        <div class="container-fluid">
    <div class="row">
        <!-- First Column -->
        <div class="col-lg-2 mb-5 ">
            <div class="card card-flush h-lg-100 d-flex  align-items-center justify-content-center">
                <div class="card-header pt-5 ">
                    <h3 class="card-title flex-column">
                        <span class=" mt-1 fs-4 text-hover-primary">Priority</span>
                        <span class="card-label fw-bold text-dark  fs-2">Normal</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-5">
            <div class="card card-flush h-lg-100 d-flex  align-items-center justify-content-center">
                <div class="card-header pt-5 text-center">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="mt-1 fs-4 text-hover-primary">Time Limit</span>
                        <span class="card-label fw-bold text-dark  fs-2">00:30</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-5">
            <div class="card card-flush h-lg-100 d-flex  align-items-center justify-content-center">
                <div class="card-header pt-5 text-center">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="mt-1 fs-4 text-hover-primary">Buffer Time</span>
                        <span class="card-label fw-bold text-dark  fs-2">00:30</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Second Column -->
        <div class="col-lg-2 mb-5">
            <div class="card card-flush h-lg-100 d-flex  align-items-center justify-content-center">
                <div class="card-header pt-5 text-center">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="mt-1 fs-4 text-hover-primary ">Add Links</span>
                        <span class="card-label fw-bold text-dark  fs-2">0 Links</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-5">
            <div class="card card-flush h-lg-100 d-flex  align-items-center justify-content-center">
                <div class="card-header pt-5 text-center">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="mt-1 fs-4 text-hover-primary">Start Time</span>
                        <span class="card-label fw-bold text-dark  fs-2">00</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-5">
            <div class="card card-flush h-lg-100 d-flex  align-items-center justify-content-center">
                <div class="card-header pt-5 text-center">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="mt-1 fs-4 text-hover-primary">End Time</span>
                        <span class="card-label fw-bold text-dark  fs-2">00</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-5 mb-5 ">
            <div class="card card-flush h-lg-100 d-flex  align-items-center justify-content-center">
                <div class="card-header pt-5 text-center">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="mt-1 fs-4 text-hover-primary">Links</span>
                        <span class="card-label fw-bold text-dark  fs-4">See the links before start the task</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

</template>

<script>
import Base from './base.vue';

export default {
    extends: Base,
    name: 'detail',

    mounted() {

    },
};
</script>
