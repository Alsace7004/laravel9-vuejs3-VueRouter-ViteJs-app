import {createRouter,createWebHistory} from "vue-router";
import Home from "../views/Home.vue";
import About from "../views/About.vue";
import User from "../views/Users.vue";
import Role from "../views/Roles.vue";
import Custumer from "../views/Custumers.vue";
import Level from "../views/Levels.vue";
import Settings from "../views/Settings.vue";
import Logout from "../views/Logout.vue";
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
        path:'/users',
        name:'users',
        component:User,
    },
    {
        path:'/roles',
        name:'roles',
        component:Role,
    },
    {
        path:'/customers',
        name:'customers',
        component:Custumer,
    },
    {
        path:'/levels',
        name:'levels',
        component:Level,
    },
    {
        path:"/settings",
        name:'settings',
        component:Settings,
    },
    {
        path:'/logout',
        name:'logout',
        component:Logout,
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