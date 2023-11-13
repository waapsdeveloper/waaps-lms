<template>
        <div class="main-menu">
            <div class="menu-logo">
                <a href="index.html"><img src="assets/images/logo-both-color.png" alt="logo"></a>
            </div>
            <ul>
                <li class="have-submenu"><a href="#">home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">home 01</a></li>
                        <li><a href="home-2.html">home 02</a></li>
                    </ul>
                </li>
                <li><a href="about.html">about</a></li>
                <li class="have-submenu"><a href="#">course</a>
                    <ul class="sub-menu">
                        <li><a href="web-development.html">web development</a></li>
                        <li><a href="education.html">education</a></li>
                        <li><a href="business.html">business</a></li>
                        <li><a href="banking.html">banking</a></li>
                        <li><a href="corporate.html">corporate</a></li>
                        <li><a href="consulting.html">consulting</a></li>
                        <li><a href="marketing.html">marketing</a></li>
                        <li><a href="photography.html">photography</a></li>
                        <li><a href="music.html">music</a></li>
                    </ul>
                </li>
                <li><a href="course-details.html">course details</a></li>
                <li><a href="course-video.html">course video</a></li>
                <li><a href="package.html">package</a></li>
                <li><a href="instructor-details.html">instructor details</a></li>
                <li><a href="cart.html">cart</a></li>
                <li><a href="purchase.html">purchase</a></li>
                <li class="have-submenu"><a href="#">blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="blog-details.html">blog details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">contact</a></li>
                <li><a href="login.html">log in</a></li>
                <li><a href="signup.html">sign up</a></li>
                <li><a href="404.html">404</a></li>
            </ul>
        </div>
</template>

<script>
import Base from '../pages/base.vue';


export default{
    extends: Base,
    name: 'cmenu',
    mounted(){
        this.subscribe('toggle-menu', this.toggleMenu);

    },
    methods: {
        toggleMenu(){
            let menu = document.querySelector('.main-menu');
            menu.classList.toggle('active');
        }
    }



}
</script>
