<template>
    <div class="m-0">
        <!--begin::Heading-->
        <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse"
            :data-bs-target="'#' + pid">
            <!--begin::Icon-->
            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                        <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                <span class="svg-icon toggle-off svg-icon-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)"
                            fill="currentColor" />
                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Icon-->
            <!--begin::Title-->
            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">{{ title }}</h4>
            <!--end::Title-->
        </div>
        <!--end::Heading-->
        <!--begin::Body-->
        <div :id="pid" class="collapse show fs-6 ms-1">
            <!--begin::Text-->
            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                {{ content }}
            </div>
            <!--end::Text-->
        </div>
        <!--end::Content-->
        <!--begin::Separator-->
        <div class="separator separator-dashed"></div>
        <!--end::Separator-->
    </div>
</template>

<script>

export default {
    props: {
        title: {
            type: String,
            default: ''
        },
        content: {
            type: String,
            default: ''
        },
        pid: {
            type: String,
            default: Math.random().toString(36).substring(7)
        }
    },
    name: 'collapse-title',
    mounted() {

    }



}
</script>
