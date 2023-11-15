<template>
    <header class="header-section">
            <!-- Header Info Starts -->
            <div class="header-info">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="info-left">
                                <div class="phone-part">
                                    <i class="fa fa-phone-square"></i>
                                    <span><a href="#">+012-345 6789</a></span>
                                </div>
                                <div class="email-part">
                                    <i class="fa fa-envelope-open"></i>
                                    <span><a href="#">info@rumbok.com</a></span>
                                </div>
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
                                    <li class="login-button"><a href="/login">login</a></li>
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
            <!-- main Header Starts -->
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="header-logo">
                                <a href="/"><img src="assets/images/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="main-header-right">
                                <!-- Category Dropdown Starts -->
                                <div class="category-dropdown">
                                    <div class="menu-bar">
                                        <i class="fa fa-bars"></i>
                                        <span>categories</span>
                                    </div>
                                    <div class="category-menu">
                                        <ul>
                                            <li><a href="/category?type=web">Web Development</a></li>
                                            <li><a href="/category?type=mobile">Mobile Development</a></li>
                                            <!-- <li><a href="/web-development">web development</a></li>
                                            <li><a href="/education">education</a></li>
                                            <li class="have-submenu"><a href="#">business</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/banking>banking sector</a></li>
                                                    <li><a href="/corporate">corporate sector</a></li>
                                                    <li><a href="/consulting">consulting</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/marketing>marketing</a></li>
                                            <li><a href="/photography">photography</a></li>
                                            <li><a href="/music">music</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-search">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-button">
                                    <a href="/signup" class="template-button-2">become student</a>
                                    <a href="/instructor-details" class="template-button">instructor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
</template>

<script>
import Base from '../pages/base.vue';


export default{
    extends: Base,
    name: 'cheader',
    mounted(){

    },
    methods: {
        toggleMenu(){
            this.publish('toggle-menu', true)
        }
    }



}
</script>
