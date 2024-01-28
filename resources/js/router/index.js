import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import AboutView from '../views/AboutView.vue';

const routes = [
   { path: '/',  name: 'HomeView', component: HomeView },
   { path: '/vue/about', name: 'AboutView', component: AboutView },
];

const router = createRouter({
   history: createWebHistory(),
   routes,
});

export default router;
