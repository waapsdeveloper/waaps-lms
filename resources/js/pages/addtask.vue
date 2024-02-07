<template>
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->

        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">

            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Row-->

                <section>
                    <div class="container mt-5">
                        <div class="row">
                            <div class="card mb-6 mb-xl-10">
                                <!--begin::Card header-->
                                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                                    aria-controls="kt_account_profile_details">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Add task</h3>
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
                                                    <span class="required">Task</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <select name="country" aria-label="Select a Country"
                                                        data-control="select2" data-placeholder="Select task"
                                                        class="form-select form-select-solid form-select-lg fw-semibold">
                                                        <option value="">Select Task</option>
                                                        <option value="AF">HTML & CSS
                                                        </option>
                                                        <option value="AX">JS </option>
                                                        <option value="AL">LARAVEL</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>

                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                    <span class="required">Title</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="title must be active"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <input type="text" name="phone"
                                                        class="form-control form-control-lg form-control-solid"
                                                        placeholder="title" />
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                    <span class="required">Due Date</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip"></i>
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
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip"></i>
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
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip"></i>
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
                                                    <select name="country" aria-label="Select a Country"
                                                        data-control="select2"
                                                        class="form-select form-select-solid form-select-lg fw-semibold">
                                                        <option value="">Select user</option>
                                                        <option value="AF">noor
                                                        </option>
                                                        <option value="AX">abdullah</option>
                                                        <option value="AL">hamza</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="card-header border-0 cursor-pointer" role="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#kt_account_profile_details"
                                                            aria-expanded="true" aria-controls="kt_account_profile_details">
                                                            <!--begin::Card title-->
                                                            <div class="card-title m-0">
                                                                <h3 class="fw-bold m-0">Enter task guide here:</h3>
                                                            </div>
                                                            <!--end::Card title-->
                                                        </div>
                                                        <textarea name="paragraph" id="paragraphInput" rows="10"
                                                            class="form-control mb-5 text-light text-bold border-top p-3"
                                                            style="height: 200px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button type="reset"
                                                class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                            <button type="submit" class="btn btn-primary"
                                                id="kt_account_profile_details_submit">Save
                                                Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <!-- paragraph code heree... -->



                        </div>
                    </div>
                </section>

            </div>

        </div>
        <!--end::Content-->
    </div>
</template>

<script>
import Base from './base.vue';

export default {
    extends: Base,
    name: 'addtask',

}

</script>
