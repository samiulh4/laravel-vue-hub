import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import AboutView from '../views/AboutView.vue';
import TodoView from '../views/TodoView.vue';
import UserProfileView from '../views/UserProfileView.vue';

const routes = [
   { path: '/',  name: 'HomeView', component: HomeView },
   { path: '/vue/about', name: 'AboutView', component: AboutView },
   { path: '/vue/todo', name: 'TodoView', component: TodoView },
   { path: '/vue/user/profile', name: 'UserProfileView', component: UserProfileView}
];

const router = createRouter({
   history: createWebHistory(),
   routes,
});

export default router;
