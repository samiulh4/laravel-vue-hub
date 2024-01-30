import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import AboutView from '../views/AboutView.vue';
import TodoView from '../views/TodoView.vue';

const routes = [
   { path: '/',  name: 'HomeView', component: HomeView },
   { path: '/vue/about', name: 'AboutView', component: AboutView },
   { path: '/vue/todo', name: 'TodoView', component: TodoView },
];

const router = createRouter({
   history: createWebHistory(),
   routes,
});

export default router;
