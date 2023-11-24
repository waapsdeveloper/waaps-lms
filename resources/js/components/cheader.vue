<template>
    <header class="header-section">
            <!-- Header Info Starts -->
            <div class="header-info">
                <div class="container">
                    <div class="row align-items-left">
                        <div class="col-sm-6">
                            <div class="info-left">
                                <div class="menu-toggle-bar" >
                                    <div class="custom-bars">
                                        <div class="custom-bar bar-1"></div>
                                        <div class="custom-bar bar-2"></div>
                                        <div class="custom-bar bar-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="info-right">
                                <ul>

                                    <li v-if="!auth.token" class="login-button"><a href="/login">login</a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
</template>

<script>
import Base from '../pages/base.vue';
import { reactive, ref } from "vue";

export default{
    extends: Base,
    name: 'cheader',
    setup() {

    let auth = ref({
      role_id: null,
      user_id: null,
      token: null,
    });

    return {
      auth,
    };
  },
    mounted(){
        this.auth.role_id = localStorage.getItem('_role_id')
        this.auth.user_id = localStorage.getItem('_user_id')
        this.auth.token = localStorage.getItem('_token')
    },
    methods: {
        toggleMenu(){
            this.publish('toggle-menu', true)
        }
    }



}
</script>
