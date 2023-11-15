<template>
        <div class="main-menu">
            <div class="menu-logo">
                <a href="/"><img src="assets/images/logo-both-color.png" alt="logo"></a>
            </div>
            <ul>
                <li class="have-submenu"><a href="/">home</a>
                    <ul class="sub-menu">
                        <li><a href="/">home 01</a></li>
                        <li><a href="/">home 02</a></li>
                    </ul>
                </li>
                <li><a href="/about">about</a></li>
                <li class="have-submenu"><a href="/course">course</a>
                    <ul class="sub-menu">
                        <li><a href="/web-development">web development</a></li>
                        <li><a href="/education">education</a></li>
                        <li><a href="/business">business</a></li>
                        <li><a href="/banking">banking</a></li>
                        <li><a href="/corporate">corporate</a></li>
                        <li><a href="/consulting">consulting</a></li>
                        <li><a href="/marketing">marketing</a></li>
                        <li><a href="/photography">photography</a></li>
                        <li><a href="/music">music</a></li>
                    </ul>
                </li>
                <li><a href="/course-detail">course details</a></li>
                <li><a href="/course-video">course video</a></li>
                <li><a href="/packages">package</a></li>
                <li><a href="/instructor-details">instructor details</a></li>
                <li><a href="/cart">cart</a></li>
                <li><a href="/purchase">purchase</a></li>
                <li class="have-submenu"><a href="#">blog</a>
                    <ul class="sub-menu">
                        <li><a href="/blog">blog</a></li>
                        <li><a href="/blog-details">blog details</a></li>
                    </ul>
                </li>
                <li><a href="/contact">contact</a></li>
                <li><a href="/login">log in</a></li>
                <li><a href="/signup">sign up</a></li>
                <li><a href="/404">404</a></li>
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
