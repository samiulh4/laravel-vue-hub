import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
// import About from './views/About.vue';

const routes = [
   { path: '/',  name: 'home', component: HomeView },
//    { path: '/about', component: About },
];

const router = createRouter({
   history: createWebHistory(),
   routes,
});

export default router;
