<template>
    <!-- Breadcrumb Section Starts -->
    <section class="breadcrumb-section">
        <div class="breadcrumb-shape">
            <img src="assets/images/round-shape-2.png" alt="shape" class="hero-round-shape-2 item-moveTwo" />
            <img src="assets/images/plus-sign.png" alt="shape" class="hero-plus-sign item-rotate" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>signup page</h2>
                    <div class="breadcrumb-link margin-top-10">
                        <span><a href="/">home</a> / signup page</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Section Starts -->
    <section class="login-section padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login-image">
                        <img src="assets/images/login-image.jpg" alt="image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-form">
                        <h3>signup <span>now</span></h3>
                        <!-- <div class="google-button">
                                <a href="#" class="template-button"><i class="fa fa-google"></i> google</a>
                            </div> -->
                        <!-- <span class="separator">or</span> -->
                        <div class="login-tab">
                            <div class="tab">
                                <ul>
                                    <!-- <li class="tab-one active">
                                            <a href="#" class="template-button-2">admin</a>
                                        </li> -->
                                    <li class="tab-second-00" :class="{ active: auth.role == 'instructor' }">
                                        <a @click="auth.role = 'instructor'" class="template-button-2">instructor</a>
                                    </li>
                                    <li class="tab-three-00" :class="{ active: auth.role == 'student' }">
                                        <a @click="auth.role = 'student'" class="template-button-2">student</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content margin-top-30">
                            <div class="tab-one-content lost active">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="signupName"><i class="fa fa-user"></i> Your Name</label>
                                        <ul class="text-red-500 error" v-if="errors.name">
                                            <li class="ml-4 text-red-500 list-none error" v-for="error in errors.name"
                                                :key="error.id">
                                                {{ error }}
                                            </li>
                                        </ul>
                                        <input v-model="auth.name" type="name" id="signupName" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="signupEmail"><i class="fa fa-envelope"></i> Email Address</label>
                                        <input v-model="auth.email" type="email" id="signupEmail"
                                            placeholder="Email Address" />
                                        <ul class="text-red-500 error" v-if="errors.email.length">
                                            <li class="ml-4 text-red-500 list-none error" v-for="error in errors.email"
                                                :key="error.id">
                                                {{ error }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <label for="signupPassword"><i class="fa fa-lock"></i> Password</label>
                                        <input v-model="auth.password" type="password" id="signupPassword"
                                            placeholder="Password" />
                                        <ul class="text-red-500 error" v-if="errors.password.length">
                                            <li class="ml-4 text-red-500 list-none error" v-for="error in errors.password"
                                                :key="error.id">
                                                {{ error }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <label for="signupConPassword"><i class="fa fa-lock"></i> Confirm Password</label>
                                        <input v-model="auth.confirm_password" type="password" id="signupConPassword"
                                            placeholder="Confirm Password" />
                                        <ul class="text-red-500 error" v-if="errors.confirm_password.length">
                                            <li class="ml-4 text-red-500 list-none error"
                                                v-for="error in errors.confirm_password" :key="error.id">
                                                {{ error }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="checkbox-forgotpass-area">
                                        <div class="checkbox-part">
                                            <input type="checkbox" id="signupRemember" />
                                            <label for="signupRemember"> remember me</label>
                                        </div>
                                        <div class="forgotpass-part">
                                            <a href="#">forgot password?</a>
                                        </div>
                                    </div>
                                    <div class="login-button margin-top-20">
                                        <a @click="validate" class="template-button">Create account</a>
                                        <span>already have an account? <a href="/login">login</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section Starts -->
    <section class="cta-section gradient-bg padding-top-60 padding-bottom-30">
        <div class="cta-shape">
            <img src="assets/images/plus-sign.png" alt="image" class="plus-sign item-rotate" />
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title margin-bottom-40">
                        <h2>enhance your skills with <span>best online course</span></h2>
                    </div>
                    <div class="cta-button">
                        <a href="/about" class="template-button margin-right-20">start teaching</a>
                        <a href="/about" class="template-button-2">start learning</a>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-2 col-lg-6">
                    <div class="cta-image">
                        <img src="assets/images/cta-image.png" alt="image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
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

                if(user.role_id == 3 ){
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
