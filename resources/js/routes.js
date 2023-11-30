

import splash from './pages/splash.vue';
import logout from './pages/logout.vue';
import onboarding from './pages/onboarding.vue';

import parent from './pages/parent.vue';
import login from './pages/login.vue';
import dashboard from './pages/dashboard/dashboard.vue';
import course from './pages/course/course.vue';
import coursedetail from './pages/course/coursedetail.vue';
import category from './pages/category/category.vue';
import errorpage from './pages/errorpage.vue';
import about from './pages/about.vue';
import banking from './pages/banking.vue';
import blog from './pages/blog.vue';
import blogdetails from './pages/blogdetails.vue';
import business from './pages/business.vue';
import cart from './pages/cart.vue';
import consulting from './pages/consulting.vue';
import contact from './pages/contact.vue';
import corporate from './pages/corporate.vue';
import coursevideo from './pages/coursevideo.vue';
import education from './pages/education.vue';
import instructordetails from './pages/instructordetails.vue';
import marketing from './pages/marketing.vue';
import music from './pages/music.vue';
import packages from './pages/packages.vue';
import photography from './pages/photography.vue';
import purchase from './pages/purchase.vue';
import signup from './pages/signup.vue';
import webdevelopment from './pages/webdevelopment.vue';
import profile from './pages/profile/profile.vue';
import studentdashboard from './pages/studentdashboard.vue';
import instructordashboard from './pages/instructordashboard.vue';
import addcampaign from './pages/addcampaign.vue';
import campaign from './pages/campaign.vue';
import profilecampaigns from './pages/profile/profile-campaigns.vue';
import profileoverview from './pages/profile/profile-overview.vue';
import profileprojects from './pages/profile/profile-projects.vue';
import profiledocuments from './pages/profile/profile-documents.vue';
import profileactivity from './pages/profile/profile-activity.vue';
import profilefollowers from './pages/profile/profile-followers.vue';

import projectdetail from './pages/project-details/project-detail.vue';
import projectdetailoverview from './pages/project-details/project-detail-overview.vue'

// import projectdetails from './pages/projectdetails/projectdetails.vue';
// import projecttarget from './pages/projecttarget.vue';
// import viewproject from './pages/viewproject.vue';
// services
import UserService from './services/user.service';
const userService = new UserService();

async function inverseDashAuthGuard(to, from, next) {
    var isAuthenticated = false;
    //this is just an example. You will have to find a better or
    // centralised way to handle you localstorage data handling
    let flag = await userService.isUserAuthenticated()
    const role_id = localStorage.getItem('_role_id');
    if (flag && role_id == 4) {
        next('/student-dashboard'); // allow to enter route
    } if (flag && role_id == 3) {
        next('/instructor-dashboard'); // allow to enter route
    } else {
        next(); // go to '/login';
    }
}

async function AuthGuard(to, from, next) {
    var isAuthenticated = false;
    //this is just an example. You will have to find a better or
    // centralised way to handle you localstorage data handling
    let flag = await userService.isUserAuthenticated()
    if (flag) {
        next(); // allow to enter route
    } else {
        next('/login'); // go to '/login';
    }
}


async function StudentAuthGuard(to, from, next) {
    var isAuthenticated = false;
    //this is just an example. You will have to find a better or
    // centralised way to handle you localstorage data handling
    let flag = await userService.isUserAuthenticated()
    const role_id = localStorage.getItem('_role_id');
    if (flag && role_id == 4) {
        next(); // allow to enter route
    } else {
        next('/login'); // go to '/login';
    }
}


async function InstructorAuthGuard(to, from, next) {
    var isAuthenticated = false;
    //this is just an example. You will have to find a better or
    // centralised way to handle you localstorage data handling
    let flag = await userService.isUserAuthenticated()
    const role_id = localStorage.getItem('_role_id');
    if (flag && role_id == 3) {
        next(); // allow to enter route
    } else {
        next('/login'); // go to '/login';
    }
}




export const routes = [
    // { path: '/', component: require('./login/login').default },
    {   path: '/',
        name: 'parent',
        component: parent,
        children: [
            { path: "", name: 'dashboard', component: dashboard, beforeEnter: inverseDashAuthGuard  }, //
            { path: '/login', name: 'login', component: login },
            { path: '/signup', name: 'signup', component: signup },
            { path: '/logout', name: 'logout', component: logout },

            {
                path: '/profile',
                name: 'profile',
                component: profile,
                beforeEnter: AuthGuard,
                children: [
                    { path: "", name: 'overview', component: profileoverview  },
                    { path: "campaigns", name: 'profile-campaigns', component: profilecampaigns  },
                    { path: "projects", name: 'projects', component: profileprojects  },
                    { path: "documents", name: 'documents', component: profiledocuments  },
                    { path: "activity", name: 'activity', component:  profileactivity  },
                    { path: "followers", name: 'followers', component:  profilefollowers  },
                ]
            },


            {
                path: '/project-detail',
                name: 'project-detail',
                component: projectdetail,
                // beforeEnter: AuthGuard,
                children: [
                    { path: "", name: 'overview', component: projectdetailoverview  },
                    // { path: "campaigns", name: 'profile-campaigns', component: profilecampaigns  },
                    // { path: "projects", name: 'projects', component: profileprojects  },
                ]
            },

            // { path: '/projecttarget', name: 'projecttarget', component: projecttarget  },
            // { path: '/viewproject', name: 'viewproject', component: viewproject  },

            { path: '/onboarding', name: 'onboarding', component: onboarding, beforeEnter: AuthGuard },

            { path: '/student-dashboard', name: 'studentdashboard', component: studentdashboard },

            { path: '/instructor-dashboard', name: 'instructordashboard', component: instructordashboard  },
            { path: '/addcampaign', name: 'addcampaign', component: addcampaign  },
            { path: '/campaign', name: 'campaign', component: campaign  },

            { path: '/category', name: 'category', component: category },
            { path: '/course', name: 'course', component: course },
            { path: '/404', name: 'errorpage', component: errorpage },
            { path: '/about', name: 'about', component: about },
            { path: '/banking', name: 'banking', component: banking },
            { path: '/blog', name: 'blog', component: blog },
            { path: '/blog-details', name: 'blogdetails', component: blogdetails },
            { path: '/business', name: 'business', component: business },
            { path: '/cart', name: 'cart', component: cart },
            { path: '/consulting', name: 'consulting', component: consulting },
            { path: '/contact', name: 'contact', component: contact },
            { path: '/corporate', name: 'corporate', component: corporate },
            { path: '/course-detail', name: 'coursedetail', component: coursedetail },
            { path: '/course-video', name: 'coursevideo', component: coursevideo },
            { path: '/education', name: 'education', component: education },
            { path: '/instructor-details', name: 'instructordetails', component: instructordetails },
            { path: '/marketing', name: 'marketing', component: marketing },
            { path: '/music', name: 'music', component: music },
            { path: '/packages', name: 'packages', component: packages },
            { path: '/photography', name: 'photography', component: photography },
            { path: '/purchase', name: 'purchase', component: purchase },
            { path: '/web-development', name: 'webdevelopment', component: webdevelopment },



        ]
    },






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
