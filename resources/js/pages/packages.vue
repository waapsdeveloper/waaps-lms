<template>
            <!-- Breadcrumb Section Starts -->
            <section class="breadcrumb-section">
            <div class="breadcrumb-shape">
                <img src="assets/images/round-shape-2.png" alt="shape" class="hero-round-shape-2 item-moveTwo">
                <img src="assets/images/plus-sign.png" alt="shape" class="hero-plus-sign item-rotate">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>package page</h2>
                        <div class="breadcrumb-link margin-top-10">
                            <span><a href="/">home</a> / package page</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Package Section Starts -->
        <section class="package-section padding-top-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-package-item">
                            <div class="package-offer green-bg">
                                <span>40% off</span>
                            </div>
                            <div class="package-content">
                                <div class="package-icon template-icon green-icon">
                                    <i class="icofont-document-folder"></i>
                                </div>
                                <div class="package-title">
                                    <h4>web design</h4>
                                </div>
                                <p class="margin-top-20">Explore a variety of fresh topics Podcasting better management inside.</p>
                                <div class="package-price green-price">
                                    <h4>$ 250.00</h4>
                                </div>
                            </div>
                            <div class="package-image">
                                <img src="assets/images/course-image-2.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-package-item different-bg">
                            <div class="package-offer yellow-bg">
                                <span>20% off</span>
                            </div>
                            <div class="package-content">
                                <div class="package-icon template-icon yellow-icon">
                                    <i class="icofont-layers"></i>
                                </div>
                                <div class="package-title">
                                    <h4>uI UX design</h4>
                                </div>
                                <p class="margin-top-20">Explore a variety of fresh topics Podcasting better management inside.</p>
                                <div class="package-price yellow-price">
                                    <h4>$ 200.00</h4>
                                </div>
                            </div>
                            <div class="package-image">
                                <img src="assets/images/course-image-1.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-package-item">
                            <div class="package-offer blue-bg">
                                <span>10% off</span>
                            </div>
                            <div class="package-content">
                                <div class="package-icon template-icon blue-icon">
                                    <i class="icofont-library"></i>
                                </div>
                                <div class="package-title">
                                    <h4>data science</h4>
                                </div>
                                <p class="margin-top-20">Explore a variety of fresh topics Podcasting better management inside.</p>
                                <div class="package-price blue-price">
                                    <h4>$ 150.00</h4>
                                </div>
                            </div>
                            <div class="package-image">
                                <img src="assets/images/course-image-5.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Register Section Starts -->
        <div class="register-section padding-top-80 padding-bottom-120">
            <div class="container">
                <div class="register-form">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullName">Full Name*</label>
                                    <input type="text" id="fullName" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Email">Email Address*</label>
                                    <input type="text" id="Email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Password">Passowrd*</label>
                                    <input type="text" id="Password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="conPassword">Confirm Password*</label>
                                    <input type="text" id="conPassword" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                        <div class="register-button margin-top-20">
                            <a href="/signup" class="template-button">register account</a>
                            <span>Already have an account? <a href="/login" class="login-link">Login</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- CTA Section Starts -->
        <section class="cta-section gradient-bg padding-top-60 padding-bottom-30">
            <div class="cta-shape">
                <img src="assets/images/plus-sign.png" alt="image" class="plus-sign item-rotate">
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
                            <img src="assets/images/cta-image.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
</template>

<script>import Base from './base.vue';

export default{
    extends: Base,
    name: 'packages',
    mounted(){

    }



}
</script>
