import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import AboutView from '../views/AboutView.vue';
import TodoView from '../views/TodoView.vue';
import UserProfileView from '../views/UserProfileView.vue';
import BlogView from "../views/BlogView.vue";
import AdminLayout from "../views/AdminLayout.vue";
import WebLayout from "../views/WebLayout.vue";

const routes = [
   { path: '/',  name: 'HomeView', component: HomeView, meta: { requiresAuth: true } },
   { path: '/vue/about', name: 'AboutView', component: AboutView },
   { path: '/vue/todo', name: 'TodoView', component: TodoView },
   { path: '/vue/user/profile', name: 'UserProfileView', component: UserProfileView},
   { path: '/vue/blog', name: 'BlogView', component: BlogView},
   { path: '/vue/admin',  name: 'AdminLayout', component: AdminLayout, meta: { requiresAuth: true } },
   { path: '/vue/web',  name: 'WebLayout', component: WebLayout},
];

const router = createRouter({
   history: createWebHistory(),
   routes,
});

export default router;
