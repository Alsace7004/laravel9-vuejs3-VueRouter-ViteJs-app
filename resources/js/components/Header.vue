<template>      
    <div class="header">
        <div>
            <h5>Hello, Am The Header Component</h5>
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