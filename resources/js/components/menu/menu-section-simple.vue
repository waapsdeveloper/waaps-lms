<template>
    <div>
        <div class="menu-item pt-5">
            <!--begin:Menu content-->
            <div class="menu-content">
                <span class="menu-heading fw-bold text-uppercase fs-7">{{item.title}}</span>
            </div>
            <!--end:Menu content-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item" v-for="(links, index) in item.submenu" :key="index">
            <!--begin:Menu link-->
            <a class="menu-link" :href="links.link">
                <span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                    <img style="width: 100%;" :src="links.icon" />
                    <!--end::Svg Icon-->
                </span>
                <span class="menu-title">{{links.title}}</span>
            </a>
            <!--end:Menu link-->
        </div>
    </div>
</template>
<script>

import { reactive, ref } from "vue";
export default {
    props: ['item'],
    name: "menu-section-simple",
    setup(props) {
        // setup() receives props as the first argument.
        console.log(props);
        // let parentItem = ref(props.item);
        // return {
        //     parentItem
        // }
    },
    mounted() { },
};
</script>
