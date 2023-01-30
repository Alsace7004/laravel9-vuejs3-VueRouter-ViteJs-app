<template>      
    <div class="sidebar">
        <!-- sidebar_logo_container -->
        <div class="sidebar_logo_container">
            <div class="sidebar_logo">
                <img src="" alt="" srcset="">
            </div>
            <div class="sidebar_title">Ayao EDJODJINAM</div>
        </div>
        <!-- menu_item_container -->
        <div class="menu_item_container">
            <ul>
                <!-- The Begin -->
                <li>
                    <a href="#">
                        <span><i class="fas fa-home"></i></span>
                        <span>The Home</span>
                    </a>
                </li>
                <!-- The First -->
                <li>
                    <a href="#">
                        <span><i class="fas fa-home"></i></span>
                        <span>The First</span>
                    </a>
                </li>
                <!-- The Second -->
                <li>
                    <a href="#">
                        <span><i class="fas fa-home"></i></span>
                        <span>The Second</span>
                    </a>
                </li>
                <!-- The Third -->
                <li>
                    <a href="#">
                        <span><i class="fas fa-home"></i></span>
                        <span>The Third</span>
                    </a>
                </li>
                <!-- The Fourth -->
                <li>
                    <a href="#">
                        <span><i class="fas fa-home"></i></span>
                        <span>The Fourth</span>
                    </a>
                </li>
                <!-- The Fith -->
                <li>
                    <a href="#">
                        <span><i class="fas fa-home"></i></span>
                        <span>The Fifth</span>
                    </a>
                </li>
                <!-- The Sixth -->
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    setup() {
        
    },
}
</script>

<style scoped>
    .sidebar_logo_container{
        border: 1px solid red;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        height: 100px;
    }
    .sidebar_logo{
        height:65px;
        width: 65px;
        background: #4e4e4e;;
        border-radius: 50%;
    }
    .sidebar_title{
        font-weight: bold;
    }
    /*****************MENU-ITEM-CONTAINER*****************/
    .menu_item_container{
        border: 1px solid yellow;
    }
    .menu_item_container ul{
        border: 1px solid red;
        list-style-type: none;
        padding-left: 0;
    }
    .menu_item_container ul li{
        border: 1px solid violet;
        padding: 10px 15px;
    }
</style>