<template>      
    <div class="header">
        <!--  -->
        <div class="icon_container">
            <i class="fas fa-bars"></i>
        </div>
        <!--  -->
        <div>
            <h5>Hello, Am The Header Component</h5>
        </div>
        <!--  -->
    </div>
</template>

<script>
//import Link from "../components/Link.vue"
export default {
    components:{
        //Link
    },
    setup() {
        
    },
}
</script>

<style scoped>
    .icon_container{
        cursor: pointer;
        /* border: 1px solid red; */
        
        font-size: 20px;
    }
</style>