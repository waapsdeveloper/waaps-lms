import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import App from './App.vue';
import { routes } from './routes';


const router = createRouter({
    history: createWebHistory(),
    routes: routes,
    base: '/',
    mode: 'history',

});

const app = createApp(App);
app.use(router);
app.mount('#app');
