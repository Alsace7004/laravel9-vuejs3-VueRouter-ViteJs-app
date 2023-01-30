<template>      
        <div class="users">
            <h3>Hello, Am The User View</h3>
            <h5>Je suis la vue: User</h5>

            <div class="data_box">
                <div class="data_box_header">The data box header</div>
                <div class="data_box_content">
                    The data box content
                </div>
                <div class="data_box_footer">The data box footer</div>
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
        .users{
            background-color: #273c75;
            color: #fff;
            display: flex;
            flex-direction: column;
           /*  justify-content: center;
            align-items: center; */
            height: 86.45vh;
            padding: 25px;
        }
        .data_box{
            border: 1px solid red;
            width: 100%;

        }
        .data_box_header{
            margin-bottom: 2px solid #fff;
            background-color: maroon;
        }
        .data_box_content{
            background-color: rosybrown;
        }
        .data_box_footer{
            background-color: magenta;
        }
</style>