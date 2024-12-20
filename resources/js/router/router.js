import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./../Pages/HomeRoute.vue"),
    },
    {
        path: "/tasks",
        component: () => import("./../Pages/TaskRoute.vue"),
    },
    {
        path: "/inspire",
        component: () => import("./../Pages/InspireRoute.vue"),
    },


];

export default createRouter({
    history: createWebHistory(),
    routes,
});