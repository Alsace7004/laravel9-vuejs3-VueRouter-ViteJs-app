<template>      
        <div class="home">
            <h3>Hello, Am The Home Component</h3>
            <h5>Je suis un composant: le Home</h5>
        </div>
</template>

<script>
export default {
    setup() {
        
    },
}
</script>

<style scoped>
        .home{
            background-color: #00a8ff;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 86.45vh;
        }
</style>