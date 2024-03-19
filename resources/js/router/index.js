import {createRouter, createWebHistory} from 'vue-router';
import HomeView from '../views/HomeView.vue';
import AboutView from '../views/AboutView.vue';
import TodoView from '../views/TodoView.vue';
import UserProfileView from '../views/UserProfileView.vue';
import BlogView from "../views/BlogView.vue";
import SignInView from "../views/SignInView.vue";
// import AdminLayout from "../views/AdminLayout.vue";
import ApacheEChartView from "../views/ApacheEChartView.vue";

import store from "../store/index.js";


const routes = [
    {path: '/', name: 'HomeView', component: HomeView},
    {path: '/vue/sign-in', name: 'SignInView', component: SignInView, meta:{layout: 'OtherLayout'}},
    {path: '/vue/about', name: 'AboutView', component: AboutView},
    {path: '/vue/todo', name: 'TodoView', component: TodoView},
    {path: '/vue/blog', name: 'BlogView', component: BlogView},
    {path: '/vue/auth/profile', name: 'UserProfileView', component: UserProfileView, meta: { requiresAuth: true }},
    {path: '/vue/apache/e-chart', name: 'ApacheEChartView', component: ApacheEChartView},
    // {path: '/vue/admin', name: 'AdminLayout', component: AdminLayout, meta: {layout: 'AdminLayout'}},
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.requiresAuth)) {
        console.log("Dispatching authCheck action...");
        store.dispatch('authUser/authCheck').then(() => {
            const isAuthenticated = store.getters['authUser/getAuthStatus'];
            console.log('Authentication status after dispatching authCheck:', isAuthenticated);
            if (!isAuthenticated) {
                // Redirect the user to the login page or handle unauthorized access
                //next('/login');
            } else {
                //next();
            }
        }).catch(error => {
            console.error('Error while dispatching authCheck action:', error);
            //next(false); // Prevent navigation
        });
    } else {

    }
    next();
});
export default router;
