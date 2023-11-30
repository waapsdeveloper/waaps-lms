<template>
  <div
    class="d-flex flex-column flex-column-fluid flex-lg-row"
    style="background-image: url('assets/media/auth/bg4-dark.jpg')"
  >
    <!--begin::Aside-->
    <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
      <!--begin::Aside-->
      <div class="d-flex flex-column">
        <!--begin::Logo-->
        <a href="../../demo1/dist/index.html" class="mb-7">
          <img alt="Logo" src="assets/media/logos/custom-3.svg" />
        </a>
        <!--end::Logo-->
        <!--begin::Title-->
        <h2 class="text-white fw-normal m-0">
          Branding tools designed for your business
        </h2>
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
          <form
            class="form w-100"
            novalidate="novalidate"
            id="kt_sign_in_form"
            data-kt-redirect-url="../../demo1/dist/index.html"
            action="#"
          >
            <!--begin::Heading-->
            <div class="text-center mb-11">
              <!--begin::Title-->
              <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
              <!--end::Title-->
              <!--begin::Subtitle-->
              <div class="text-gray-500 fw-semibold fs-6">
                Your Social Campaigns
              </div>
              <!--end::Subtitle=-->
            </div>
            <div class="fv-row mb-8">
              <!--begin::Email-->
              <input
                type="text"
                placeholder="Email"
                name="email"
                autocomplete="off"
                class="form-control bg-transparent"
                v-model="auth.email"
              />
              <!--end::Email-->
            </div>
            <!--end::Input group=-->
            <div class="fv-row mb-3">
              <!--begin::Password-->
              <input
                type="password"
                placeholder="Password"
                name="password"
                autocomplete="off"
                class="form-control bg-transparent"
                v-model="auth.password"
              />
              <!--end::Password-->
            </div>
            <!--end::Input group=-->
            <!--begin::Wrapper-->
            <div
              class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8"
            >
              <div></div>
              <!--begin::Link-->
              <a
                href="../../demo1/dist/authentication/layouts/creative/reset-password.html"
                class="link-primary"
                >Forgot Password ?</a
              >
              <!--end::Link-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Submit button-->
            <div class="d-grid mb-10">
              <button
                type="submit"
                id="kt_sign_in_submit"
                class="btn btn-primary"
                @click="validate"
              >
                <!--begin::Indicator label-->
                <span class="indicator-label">Sign In</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span class="indicator-progress"
                  >Please wait...
                  <span
                    class="spinner-border spinner-border-sm align-middle ms-2"
                  ></span
                ></span>
                <!--end::Indicator progress-->
              </button>
            </div>
            <!--end::Submit button-->
            <!--begin::Sign up-->
            <div class="text-gray-500 text-center fw-semibold fs-6">
              Not a Member yet?
              <a @click="route('/signup')" class="link-primary" style="cursor: pointer;" >Sign up</a>
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
// import Cheader from "../components/cheader.vue";
// import Cfooter from "../components/cfooter.vue";
// import CMenu from "../components/menu/cmenu.vue";

export default {
  extends: Base,
  name: "login",
  mounted() {},
  //   components: { Cfooter, Cheader, CMenu },
  setup() {
    let errors = ref({
      email: [],
      password: [],
    });

    let auth = ref({
      email: "",
      password: "",
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
        email: [],
        password: [],
      };

      if (!this.auth.email) {
        this.errors.email.push("Email is required.");
      }
      if (!this.auth.password) {
        this.errors.password.push("Password is  required.");
      }

      console.log(this.errors);

      if (this.auth.email && this.auth.password) {
        return this.login();
      }
    },
    async login() {
      let self = this;
      console.log(this.auth, "REQUEST DATA!");
      const res = await this.network().login(this.auth);
      console.log(res, "check");
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
        // await this.network().addFcmToken({fcm_token: localStorage.getItem('_fcm_token')});
        // this.utility().presentSuccessToast("Welcome " + user.name);
        // await this.sqlite().setUserInDatabase(user);
        if (user.role_id == 3) {
          this.route("/instructor-dashboard");
        } else {
          window.location.href = '/';
        }
      });
    },
  },
};
</script>
<style scoped>
.text-red-500.error {
  color: red;
  margin: 0 !important;
  font-size: 12px;
}
</style>
