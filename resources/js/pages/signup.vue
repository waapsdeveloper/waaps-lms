<template>
    <div class="d-flex flex-column flex-column-fluid flex-lg-row"
        style="background-image: url('assets/media/auth/bg4-dark.jpg')">
        <!--begin::Aside-->
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <!--begin::Aside-->
            <div class="d-flex flex-column">
                <!--begin::Logo-->
                <a href="../../demo1/dist/index.html" class="mb-7">
                    <img alt="Logo" src="/assets/media/logos/custom-3.svg" />
                </a>
                <!--end::Logo-->
                <!--begin::Title-->
                <h2 class="text-white fw-normal m-0">Branding tools designed for your business</h2>
                <!--end::Title-->
            </div>
            <!--begin::Aside-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-center w-lg-50 p-10">
            <!--begin::Card-->
            <div class="card rounded-3 w-md-550px">
                <!--begin::Card body-->
                <div class="card-body p-10 p-lg-20">
                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form">
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
                            <!--end::Title-->
                            <!--begin::Subtitle-->
                            <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                            <!--end::Subtitle=-->
                        </div>
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">As a:
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title="Show your ads to either men or women, or select 'All' for both"></i></label>
                            <!--End::Label-->
                            <!--begin::Row-->
                            <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Option-->
                                    <label
                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                        data-kt-button="true">
                                        <!--begin::Radio-->
                                        <span
                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                            <input class="form-check-input" type="radio" name="student" value="student"
                                                  v-model="auth.role" />
                                        </span>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <span class="ms-5">
                                            <span class="fs-4 fw-bold text-gray-800 d-block">Student</span>
                                        </span>
                                        <!--end::Info-->
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Option-->
                                    <label
                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                        data-kt-button="true">
                                        <!--begin::Radio-->
                                        <span
                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                            <input class="form-check-input" type="radio" name="instructor" value="instructor"  v-model="auth.role" />
                                        </span>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <span class="ms-5">
                                            <span class="fs-4 fw-bold text-gray-800 d-block">Instructor</span>
                                        </span>
                                        <!--end::Info-->
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->

                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>

                        <!--begin::Heading-->
                        <!--begin::Login options-->
                        <div class="row g-3 mb-9">
                        </div>
                        <div class="fv-row mb-8">
                            <!--begin::Email-->
                            <input type="text" placeholder="Name" name="name" autocomplete="off"
                                class="form-control bg-transparent" v-model="auth.name" />
                            <!--end::Email-->
                        </div>
                        <div class="fv-row mb-8">
                            <!--begin::Email-->
                            <input type="text" placeholder="Email" name="email" autocomplete="off"
                                class="form-control bg-transparent" v-model="auth.email" />
                            <!--end::Email-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-8" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control bg-transparent" type="password" placeholder="Password"
                                        name="password" autocomplete="off" v-model="auth.password" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <!--end::Input wrapper-->
                                <!--begin::Meter-->
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.
                            </div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group=-->
                        <!--end::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Repeat Password-->
                            <input placeholder="Confirm Password" name="confirm-password" type="password" autocomplete="off"
                                class="form-control bg-transparent" v-model="auth.confirm_password" />
                            <!--end::Repeat Password-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Accept-->
                        <div class="fv-row mb-8">
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
                                    <a href="#" class="ms-1 link-primary">Terms</a></span>
                            </label>
                        </div>
                        <!--end::Accept-->
                        <!--begin::Submit button-->
                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                <!--begin::Indicator label-->
                                <span class="indicator-label" @click="validate">Sign up</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                        </div>
                        <!--end::Submit button-->
                        <!--begin::Sign up-->
                        <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
                            <a @click="route('/login')" class="link-primary fw-semibold" style="cursor: pointer;">Sign
                                in</a>
                        </div>
                        <!--end::Sign up-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
</template>

<script>
import Base from "./base.vue";
import { reactive, ref } from "vue";
import Cheader from "../components/header/cheader.vue";
import Cfooter from "../components/cfooter.vue";
import CMenu from "../components/menu/cmenu.vue";
export default {
    extends: Base,
    name: "signup",
    components: { Cfooter, Cheader, CMenu },
    setup() {
        let errors = ref({
            name: [],
            email: [],
            password: [],
            confirm_password: [],
        });

        let auth = ref({
            role: "student",
            name: "",
            email: "",
            password: "",
            confirm_password: "",
        });


        return {
            errors,
            auth,

        };
    },
    methods: {
        validate: function (e) {
            e.preventDefault();
            this.errors = {
                name: [],
                email: [],
                password: [],
                confirm_password: [],
            };


            if (!this.auth.name) {
                this.errors.name.push("Name is required.");
            }
            if (!this.auth.email) {
                this.errors.email.push("Email is required.");
            }
            if (!this.auth.password) {
                this.errors.password.push("Password is  required.");
            }
            if (!this.auth.confirm_password) {
                this.errors.confirm_password.push("Enter Password.");
            }

            console.log(this.errors);

            if (
                this.auth.name &&
                this.auth.email &&
                this.auth.password &&
                this.auth.confirm_password
            ) {
                return this.signup();
            }
        },
        async signup() {
            let self = this;
            console.log(this.auth, "REQUEST DATA!");
            const res = await this.network().signup(this.auth);
            //   console.log(res, "check");
            this.processRequest(res);
        },
        processRequest(res) {
            return new Promise(async (resolve) => {
                var user = res.user;
                user.token = res.token;
                localStorage.setItem("_user_id", user.id);
                localStorage.setItem("_role_id", user.role_id);
                localStorage.setItem("_token", res.token);
                console.log(user, "USER DATA");

                if (user.role_id == 3) {
                    this.route('/instructor-dashboard')
                } else {
                    this.route('/student-dashboard')
                }



                // await this.network().addFcmToken({fcm_token: localStorage.getItem('_fcm_token')});
                // this.utility().presentSuccessToast("Welcome " + user.name);
                // await this.sqlite().setUserInDatabase(user);
                // this.route("/course");
                //point to taken
            });
        },
    },
};
</script>
<style>
.template-button-2:active {
    background-color: #f9f9f9;
    color: #000;
    border: 1px solid #000;
}

.template-button-2 {
    cursor: pointer;
}

.active-button {
    background-color: #50be46;
}

.template-button {
    cursor: pointer;
}

.text-red-500 {
    color: red;
}

.text-red-500.error {
    color: red;
    margin: 0 !important;
    font-size: 12px;
}
</style>
