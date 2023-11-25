<template>
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <Cheader></Cheader>
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <CMenu></CMenu>
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <router-view></router-view>
                </div>
                <Cfooter></Cfooter>
            </div>


        </div>
    </div>
</template>

<script>
import Cheader from "../components/header/cheader.vue";
import Cfooter from "../components/cfooter.vue";
import Base from "./base.vue";
import CMenu from "../components/menu/cmenu.vue";

export default {
    extends: Base,
    name: "parent",
    mounted() { },
    components: { Cfooter, Cheader, CMenu },
};
</script>
