<template>

  <section class="breadcrumb-section">
    <div class="breadcrumb-shape">
      <img
        src="assets/images/round-shape-2.png"
        alt="shape"
        class="hero-round-shape-2 item-moveTwo"
      />
      <img
        src="assets/images/plus-sign.png"
        alt="shape"
        class="hero-plus-sign item-rotate"
      />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>login page</h2>
          <div class="breadcrumb-link margin-top-10">
            <span><a href="index.html">home</a> / login page</span>
          </div>
        </div>
      </div>
    </div>
  </section>

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
            <h3>login to your <span>account!</span></h3>
            <div class="login-tab">
              <div class="tab">
                <ul>
                  <li class="tab-second">
                    <a href="#" class="template-button-2">instructor</a>
                  </li>
                  <li class="tab-three">
                    <a href="#" class="template-button-2">student</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="tab-content margin-top-30">
              <div class="tab-one-content lost active">
                <form action="#" method="POST">
                  <div class="form-group">
                    <label for="loginEmail"
                      ><i class="fa fa-envelope"></i> Email Address</label
                    >
                    <input
                      type="email"
                      id="loginEmail"
                      placeholder="Email Address"
                      v-model="auth.email"
                    />
                    <ul class="text-red-500 error" v-if="errors.email.length">
                      <li
                        class="ml-4 text-red-500 list-none error"
                        v-for="error in errors.email"
                        :key="error.id"
                      >
                        {{ error }}
                      </li>
                    </ul>
                  </div>

                  <div class="form-group">
                    <label for="loginPassword"
                      ><i class="fa fa-lock"></i> Password</label
                    >
                    <input
                      type="password"
                      id="loginPassword"
                      placeholder="Password"
                      v-model="auth.password"
                    />
                    <ul
                      class="text-red-500 error"
                      v-if="errors.password.length"
                    >
                      <li
                        class="ml-4 text-red-500 list-none error"
                        v-for="error in errors.password"
                        :key="error.id"
                      >
                        {{ error }}
                      </li>
                    </ul>
                  </div>

                  <div class="checkbox-forgotpass-area">
                    <!-- <div class="forgotpass-part">
                      <a href="#">forgot password?</a>
                    </div> -->
                  </div>
                  <div class="login-button margin-top-20">
                    <button @click="validate" class="template-button">
                      login account
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-section gradient-bg padding-top-60 padding-bottom-30">
    <div class="cta-shape">
      <img
        src="assets/images/plus-sign.png"
        alt="image"
        class="plus-sign item-rotate"
      />
    </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="section-title margin-bottom-40">
            <h2>enhance your skills with <span>best online course</span></h2>
          </div>
          <div class="cta-button">
            <a href="#" class="template-button margin-right-20"
              >start teaching</a
            >
            <a href="#" class="template-button-2">start learning</a>
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
import Cheader from "../components/cheader.vue";
import Cfooter from "../components/cfooter.vue";
import CMenu from "../components/cmenu.vue";

export default {
  extends: Base,
  name: "login",
  mounted() {},
  components: { Cfooter, Cheader, CMenu },
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
        localStorage.setItem("_token", res.token);
        console.log(user, "USER DATA");
        // await this.network().addFcmToken({fcm_token: localStorage.getItem('_fcm_token')});
        // this.utility().presentSuccessToast("Welcome " + user.name);
        // await this.sqlite().setUserInDatabase(user);
        this.route("/course");
        //point to taken
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
