<template>      
    <div class="sidebar">
        <!-- sidebar_logo_container -->
        <div class="sidebar_logo_container">
            <div class="sidebar_logo">
                <img src="" alt="" srcset="">
            </div>
            <div class="sidebar_title">Ayao EDJODJINAM <!-- Mégadénam --></div>
        </div>
        <!-- menu_item_container -->
        <div class="menu_item_container">
            <ul id="cri">
                <!-- The Begin -->
                <li>
                    <router-link :to="{name:'home'}" class="item">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span>The Dashboard</span>
                    </router-link>
                </li>
                <!-- The First -->
                <li>
                    <router-link :to="{name:'users'}" class="item">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span>The Users</span>
                    </router-link>
                </li>
                <!-- The Second -->
                <li>
                    <router-link :to="{name:'roles'}" class="item">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span>The Roles</span>
                    </router-link>
                </li>
                <!-- The Third -->
                <li>
                    <router-link :to="{name:'customers'}" class="item">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span>The Customers</span>
                    </router-link>
                </li>
                <!-- The Fourth -->
                <li>
                    <router-link :to="{name:'levels'}" class="item">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span>The Levels</span>
                    </router-link>
                </li>
                <!-- The Fith -->
                <li>
                    <router-link :to="{name:'settings'}" class="item">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span>The Settings</span>
                    </router-link>
                </li>
                <!-- The Sixth -->
                <li>
                    <router-link :to="{name:'about'}" class="item">
                        <span class="icon"><i class="fas fa-exclamation-circle"></i></span>
                        <span>The About</span>
                    </router-link>
                </li>
                <!-- The Seventh -->
                <li>
                    <router-link :to="{name:'logout'}" class="item">
                        <span class="icon"><i class="fas fa-power-off"></i></span>
                        <span>The Logout</span>
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { onMounted } from '@vue/runtime-core'
export default {
    setup() {
        onMounted(()=>{
            console.log("Hello from onMounted !!!")
        })
        const makeActive = ()=>{
           /*  alert("Hello")
            console.log("Valeur de e:",e.target) */
        }
        return {makeActive}
    },
}
</script>

<style scoped>
    .sidebar_logo_container{
        /* border: 1px solid red; */
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        height: 100px;
        background-color: #2f3640;
    }
    .sidebar_logo{
        height:65px;
        width: 65px;
        background: #eee;;
        border-radius: 50%;
    }
    .sidebar_title{
        font-weight: bold;
        color: #eee;
    }
    /*****************MENU-ITEM-CONTAINER*****************/
    .menu_item_container{
        /* border: 1px solid yellow; */
        background-color: #484a4c;
        height: 100%;
        padding-top: 1px;
    }
    .menu_item_container ul{
        /* border: 1px solid red; */
        list-style-type: none;
        padding-left: 0;
    }
    .menu_item_container ul li:first-child{
        /* background-color: #fff; */
        border-top: 1px solid #2f3640;
    }
    .menu_item_container ul li a.active{
        /* background-color: #f00; */
        border: 1px solid #fff;
        border-radius: 5px;
    }
    /* .menu_item_container ul li{
        border: 1px solid violet;
        padding: 10px 15px; 
    } */
    .menu_item_container ul li a{
        /* border: 1px solid rgb(10, 10, 243); */
        padding: 10px 15px;
        display: flex;
        color: #eee;
        transition: all 0.5s ease;
        border-bottom: 1px solid #2f3640;
    }
    .menu_item_container ul li a:hover{
        color: #fff;
        /* margin-left: 10px; */
        padding-left: 10px;
    }
    .menu_item_container ul li .icon{
        width: 30px;

    }
</style>