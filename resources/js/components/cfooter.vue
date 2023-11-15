<template>
        <footer class="footer-section padding-top-30 padding-bottom-60">
            <div class="footer-shape">
                <img src="assets/images/round-shape-3.png" alt="shape" class="round-shape-3">
            </div>
            <div class="container">
                <div class="footer-widget-section">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="/"><img src="assets/images/logo.png" alt="logo"></a>
                                </div>
                                <p>Lorem ipsum dolor, sit amet conse adipisicing elit. quidem perspiciatis earum voluptatem enim dolor.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h4 class="title">courses</h4>
                                </div>
                                <ul>
                                    <li><a href="#">web page design</a></li>
                                    <li><a href="#">IOS aplication</a></li>
                                    <li><a href="#">UX research</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h4 class="title">useful links</h4>
                                </div>
                                <ul>
                                    <li><a href="/about">about us</a></li>
                                    <li><a href="/about">terms of service</a></li>
                                    <li><a href="/about">legal info</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h4 class="title">company</h4>
                                </div>
                                <div class="company-address d-flex">
                                    <div class="address-icon template-icon green-icon margin-right-10">
                                        <i class="icofont-address-book"></i>
                                    </div>
                                    <div class="address-info">
                                        info@rumbok.com <br>
                                        <span>new york, 20 south park avenue.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright-section">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <div class="copyright-text">
                                <span>&copy; rumbok 2020.</span>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="copyright-button">
                                <div class="dropup-item item-1">
                                    <button class="template-button-2" type="button">
                                        <span class="margin-right-10">$ USD</span><i class="fa fa-caret-up"></i>
                                    </button>
                                    <ul class="toggle-box box-1">
                                        <li><a href="#">$ 500</a></li>
                                        <li><a href="#">$ 700</a></li>
                                    </ul>
                                </div>
                                <div class="dropup-item item-2 margin-left-20">
                                    <button class="template-button" type="button">
                                        <span class="margin-right-10">English</span><i class="fa fa-caret-up"></i>
                                    </button>
                                    <ul class="toggle-box box-2">
                                        <li><a href="#">Bengali</a></li>
                                        <li><a href="#">Arabic</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</template>

<script>
import Base from '../pages/base.vue';


export default{
    extends: Base,
    name: 'cfooter',
    mounted(){

    }



}
</script>
