<template>
    
    <Sidebar/>
    <div class="content">
        <Header/>
            <router-view/>
        <!-- <Footer/> -->
    </div>
            
</template>


<script>
    import Header from "./components/Header.vue";
    import Footer from "./components/Footer.vue";
    import Sidebar from "./components/Sidebar.vue"
    export default {
        components:{
            Header,Footer,Sidebar
        },
        setup() {
            
        },
    }
</script>

<style scoped>

</style>