import {createRouter,createWebHistory} from "vue-router";
/* import Home from "../views/Home.vue";
import About from "../views/About.vue";
import User from "../views/Users.vue";
import Role from "../views/Roles.vue";
import Custumer from "../views/Custumers.vue";
import Level from "../views/Levels.vue";
import Settings from "../views/Settings.vue";
import Logout from "../views/Logout.vue";
import NotFound from "../components/NotFound.vue"; */
const routes = [
    {
        path:'/',
        name:'home',
        component:()=>import("../views/Home.vue")
    },
    {
        path:'/about',
        name:'about',
        component:()=>import("../views/About.vue")
    },
    {
        path:'/users',
        name:'users',
        component:()=>import("../views/Users.vue"),
    },
    {
        path:'/roles',
        name:'roles',
        component:()=>import("../views/Roles.vue"),
    },
    {
        path:'/customers',
        name:'customers',
        component:()=>import("../views/Custumers.vue"),
    },
    {
        path:'/levels',
        name:'levels',
        component:()=>import("../views/Levels.vue"),
    },
    {
        path:"/settings",
        name:'settings',
        component:()=>import("../views/Settings.vue"),
    },
    {
        path:'/logout',
        name:'logout',
        component:()=>import("../views/Logout.vue"),
    },
    {
        path:'/:pathMatch(.*)*',
        name:'NotFound',
        component:()=>import("../components/NotFound.vue")
    }
];

const router = createRouter({
    history:createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router;