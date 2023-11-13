

import splash from './pages/splash.vue';
import login from './pages/login.vue';
import dashboard from './pages/dashboard/dashboard.vue';
import course from './pages/course/course.vue';
import coursedetail from './pages/course/coursedetail.vue';



export const routes = [
    // { path: '/', component: require('./login/login').default },
    { path: '/', name: 'splash', component: splash },
    { path: '/login', name: 'login', component: login },

    { path: '/dashboard', name: 'dashboard', component: dashboard },
    { path: '/course', name: 'course', component: course },
    { path: '/course/:id', name: 'coursedetail', component: coursedetail },
    // {
    //     path: '/dashboard',
    //     component: require('./dashboard/dashboard').default,
    //     beforeEnter: authGuard,
    //     children: [
    //         {
    //             path: '/properties',
    //             component: require('./dashboard/pages/property-page/properties').default,

    //         },
    //         {
    //             path: '/properties/:pid/equipment',
    //             name: 'Equipment',
    //             component: require('./dashboard/pages/equipment-page/equipment').default,
    //             children: [
    //                 // {
    //                 //     path: '/',
    //                 //     name: 'units',
    //                 //     component: require('./dashboard/pages/equipment-page/unitList').default,

    //                 // },
    //                 {
    //                     path: ':id/units',
    //                     name: 'units',
    //                     component: require('./dashboard/pages/equipment-page/unitList').default,

    //                 }
    //             ],
    //         },
    //         {
    //             path: '/reports',
    //             component: require('./dashboard/pages/report-page/report').default
    //         },
    //         {
    //             path: '/alerts',
    //             component: require('./dashboard/pages/alert-page/alert').default
    //         },
    //         {
    //             path: '/users',
    //             component: require('./dashboard/pages/user-page/user').default,

    //         },
    //         {
    //             path: '/users/create',
    //             component: require('./dashboard/pages/user-page/createUser').default
    //         },
    //         {
    //             path: '/apis',
    //             component: require('./dashboard/pages/api-page/api').default
    //         },
    //         {
    //             path: '/billing',
    //             component: require('./dashboard/pages/billing-page/billing').default
    //         },
    //     ]
    // },
];
