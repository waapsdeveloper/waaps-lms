<template>
    <!--begin::Row-->
    <div class="row mb-12">
        <!--begin::Col-->
        <div class="col-12 mb-10">
            <!--begin::Title-->
            <h2 class="text-gray-800 fw-bold mb-4">Read and Agree A Few Basic Terms</h2>
            <!--end::Title-->
            <!--begin::Accordion-->
            <!--begin::Section-->
            <div v-for="item of list" :key="item.pid">
                <collapse-title :title="item.title" :content="item.content" :pid="item.pid"></collapse-title>
            </div>
            <!--end::Accordion-->

        </div>
        <!--end::Col-->

</div>
<!--end::Row--></template>

<script>
import { ref } from 'vue'

import CollapseTitle from './../../components/common/collapse-title.vue'
import terms  from './../../data/on-boarding.json';

export default {
    name: 'on-boarding-terms',
    setup() {
        let list = ref(terms)
        return {
            list
        }
    },
    components: {
        'collapse-title': CollapseTitle
    },
    mounted() {

    }



}
</script>
