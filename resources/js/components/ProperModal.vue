<template>
    <div class="modal fade right" :id="modalName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!-- Mdl Content Begin-->
            <div class="modal-content">
                <!-- header -->
                <div class="modal-header">
                    <slot name="header"></slot>
                    
                </div>
                <!-- body -->
                <div class="modal-body">
                    <slot name="body"></slot>
                </div>
                <!-- footer -->
                <div class="modal-footer">
                    <slot name="footer"></slot>
                </div>
            </div>
            <!-- Mdl Content End -->
        </div>
    </div>
</template>

<script setup>
    defineProps({
        modalName:{
            type:String
        }
    })
</script>

<style scoped>
.modal{
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
}
.modal-dialog{
    background: #fff;
    box-shadow: 4px 4px 30px 2px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
}
.modal-content{
    border: 1px solid red;
}
.modal-header{
    border: 1px solid green;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.modal-body{
    border: 1px solid gold;
    padding: 30px 20px;
}
.modal-footer{
    border: 1px solid #000;
    justify-content: flex-end;
}
/***/
.modal-header,.modal-footer{
    padding: 10px;
}

</style>
