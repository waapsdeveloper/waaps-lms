<template>
     <!-- Breadcrumb Section Starts -->
     <section class="breadcrumb-section">
            <div class="breadcrumb-shape">
                <img src="/assets/images/round-shape-2.png" alt="shape" class="hero-round-shape-2 item-moveTwo">
                <img src="/assets/images/plus-sign.png" alt="shape" class="hero-plus-sign item-rotate">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>404 page</h2>
                        <div class="breadcrumb-link margin-top-10">
                            <span><a href="/">home</a> / 404 page</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 404 Page Starts  -->
        <div class="page-404 padding-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content-404 text-center">
                            <img src="/assets/images/404.png" alt="404">
                            <a href="/dashboard" class="template-button margin-top-60">back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section Starts -->
        <section class="cta-section gradient-bg padding-top-60 padding-bottom-30">
            <div class="cta-shape">
                <img src="/assets/images/plus-sign.png" alt="image" class="plus-sign item-rotate">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title margin-bottom-40">
                            <h2>enhance your skills with <span>best online course</span></h2>
                        </div>
                        <div class="cta-button">
                            <a href="#" class="template-button margin-right-20">start teaching</a>
                            <a href="#" class="template-button-2">start learning</a>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-2 col-lg-6">
                        <div class="cta-image">
                            <img src="/assets/images/cta-image.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
</template>

<script>import Base from './base.vue';

export default{
    extends: Base,
    name: 'errorpage',
    mounted(){

    }

}
</script>
