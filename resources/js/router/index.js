import VueRouter from "vue-router";

import Home from "../views/Home.vue";

const routes = [
    {
        path: '/',
        redirect: "/home",
    },
    {
        path: '/home',
        name: 'Home',
        component: Home,
    }
]

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(process.env.BASE_URL),
    routes,
})

export default router;