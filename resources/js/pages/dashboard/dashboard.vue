<template>
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <dashboard-toolbar></dashboard-toolbar>
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Engage widget 1-->
                        <intro-card-one></intro-card-one>

                        <!--end::Engage widget 1-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <intro-card-two></intro-card-two>
                        <!--begin::Engage widget 4-->
											 <!--begin::Engage widget 10-->

                        <!--end::Engage widget 10-->
											<!--end::Engage widget 4-->

                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 20-->
                        <intro-card-three></intro-card-three>

                        <!--end::Card widget 20-->
                        <!--begin::Card widget 7-->
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <intro-car-four></intro-car-four>

                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 7-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 17-->
                        <intro-car-five></intro-car-five>

                        <!--end::Card widget 17-->
                        <!--begin::List widget 26-->
                        <div class="card card-flush h-lg-50">
                            <intro-car-six></intro-car-six>

                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 26-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xxl-6">
                        <!--begin::Engage widget 10-->
                        <intro-car-seven></intro-car-seven>

                        <!--end::Engage widget 10-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gx-5 gx-xl-10">
                    <!--begin::Col-->
                    <intro-car-eight></intro-car-eight>

                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6 mb-5 mb-xl-10">
                        <!--begin::Tables widget 16-->
                        <intro-car-nine></intro-car-nine>

                        <!--end::Tables widget 16-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <intro-car-ten></intro-car-ten>

                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Chart widget 36-->
                        <intro-car-eleven></intro-car-eleven>

                        <!--end::Chart widget 36-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <intro-car-twelve></intro-car-twelve>

                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Tables widget 14-->
                      <intro-car-thirteen></intro-car-thirteen>
                        <!--end::Tables widget 14-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gx-5 gx-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Chart widget 31-->
                     <intro-card-fourteen></intro-card-fourteen>
                        <!--end::Chart widget 31-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Chart widget 24-->
                    <intro-card-fifteen></intro-card-fifteen>
                        <!--end::Chart widget 24-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->

    </div>
    <!--end::Content wrapper-->
</template>

<script>

import Base from '../base.vue';
import DashboardToolbar from './dashboard-toolbar.vue';
import IntroCardOne from './components/intro-card-one.vue';
import IntroCardTwo from './components/intro-card-two.vue';
import IntroCardThree from './components/intro-card-three.vue';
import IntroCardFour from './components/intro-card-four.vue';
import IntroCardFive from './components/intro-card-five.vue';
import IntroCardSix from './components/intro-card-six.vue';
import IntroCardSeven from './components/intro-card-seven.vue';
import IntroCardEight from './components/intro-card-eight.vue';
import IntroCardNine from './components/intro-card-nine.vue';
import IntroCardTen from './components/intro-card-ten.vue';
import introCardEleven from './components/intro-card-eleven.vue';
import introCardTwelve from './components/intro-card-twelve.vue';
import introCardThirteen from './components/intro-card-thirteen.vue';
import IntroCardFourteen from './components/intro-card-fourteen.vue';
import IntroCardFifteen from './components/intro-card-fifteen.vue';

export default {
    extends: Base,
    name: "dashboard",
    mounted() {
    },
    components: {
        'dashboard-toolbar': DashboardToolbar,
        'intro-card-one' : IntroCardOne,
        'intro-card-two' : IntroCardTwo,
        'intro-card-three' : IntroCardThree,
        'intro-car-four' : IntroCardFour,
        'intro-car-five' : IntroCardFive,
        'intro-car-six' : IntroCardSix,
        'intro-car-seven' : IntroCardSeven,
        'intro-car-eight' : IntroCardEight,
        'intro-car-nine' : IntroCardNine,
        'intro-car-ten' : IntroCardTen,
        'intro-car-eleven' : introCardEleven,
        'intro-car-twelve' : introCardTwelve,
        'intro-car-thirteen' : introCardThirteen,
        'intro-card-fourteen' : IntroCardFourteen,
        'intro-card-fifteen' : IntroCardFifteen,

    }
}
</script>
