import {createRouter,createWebHistory} from "vue-router";
import Home from "../views/Home.vue";
import About from "../views/About.vue";
import NotFound from "../components/NotFound.vue";
const routes = [
    {
        path:'/',
        name:'home',
        component:Home
    },
    {
        path:'/about',
        name:'about',
        component:About
    },
    {
        path:'/:pathMatch(.*)*',
        name:'NotFound',
        component:NotFound
    }
];

const router = createRouter({
    history:createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router;