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
                                <h3 class="fw-bold m-0">Task Details</h3>
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
                                            <span>Task</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <span class="form-control form-control-lg form-control-solid fw-semibold">Sell
                                                App</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>Title</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <span class="form-control form-control-lg form-control-solid fw-semibold">Sample
                                                Title</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>Due Date</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <span
                                                class="form-control form-control-solid form-control-lg fw-semibold">2024-01-31</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>


                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>Start Time</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <span
                                                class="form-control form-control-solid form-control-lg fw-semibold">10:00</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>End Time</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <span
                                                class="form-control form-control-solid form-control-lg fw-semibold">12:00</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>Assign To</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <span class="form-control form-control-solid form-control-lg fw-semibold">John
                                                Doe</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- paragraph code heree... -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <label for="paragraphInput" class="form-label">
                                <h3><b>Task Guides:</b></h3>
                            </label>
                            <p id="paragraphInput" class="form-control mb-5 text-light text-bold border-top p-3"
                                style="height: 425px;"><b>
                                    Insert your Task guide paragraph here...
                                </b>
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row g-6 g-xl-9 mb-5 text-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card border-hover-primary">

                        <div class="card-body p-9">
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">Priority</p>
                            <div class="fs-3 fw-bold text-dark">Normal</div>


                        </div>

                    </div>

                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card border-hover-primary">

                        <div class="card-body p-9">
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">Time Limit</p>
                            <div class="fs-3 fw-bold text-dark">00:30</div>


                        </div>

                    </div>

                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-xl-4">
                    <div class="card border-hover-primary">

                        <div class="card-body p-9">
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">Buffer Time</p>
                            <div class="fs-3 fw-bold text-dark">00:30</div>


                        </div>

                    </div>

                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-xl-4">
                    <div class="card border-hover-primary">

                        <div class="card-body p-9">
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">Add Links</p>
                            <div class="fs-3 fw-bold text-dark">0 Links</div>


                        </div>

                    </div>

                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-xl-4">
                    <div class="card border-hover-primary">

                        <div class="card-body p-9">
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">Start Time</p>
                            <div class="fs-3 fw-bold text-dark">00:00</div>


                        </div>

                    </div>

                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card border-hover-primary">

                        <div class="card-body p-9">
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">End Time</p>
                            <div class="fs-3 fw-bold text-dark">00:00</div>


                        </div>

                    </div>

                </div>
                <!--end::Col-->
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
