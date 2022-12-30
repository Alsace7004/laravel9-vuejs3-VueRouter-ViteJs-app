<template>      
    <div class="header">
        <div>
            <h1>Hello, Am The Header Component</h1>
        </div>
        <Link/>
    </div>
</template>

<script>
import Link from "../components/Link.vue"
export default {
    components:{
        Link
    },
    setup() {
        
    },
}
</script>

<style scoped>

</style>