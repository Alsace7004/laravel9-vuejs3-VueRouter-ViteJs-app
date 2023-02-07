//import Vue from 'vue'
import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
/****************SWEET-ALERT-CONFIG-BEGIN*********************************/
// ES6 Modules or TypeScript
import Swal from 'sweetalert2'
import 'sweetalert2/dist/sweetalert2.min.css';
window.Swal = Swal
/****************SWEET-ALERT-CONFIG-BEGIN*********************************/
/****************GITART-VUE-DIALOG-CONFIG-BEGIN***************************/
import 'gitart-vue-dialog/dist/style.css'
import { GDialog } from 'gitart-vue-dialog'
/****************GITART-VUE-DIALOG-CONFIG-END*****************************/
import {useLoading} from 'vue-loading-overlay'
import 'vue-loading-overlay/dist/css/index.css';
/************************************************************/
//let loader = useLoading();
        const $loading = useLoading({
        // options
        });
        router.beforeEach((to, from, next) => {

                //if (to.name) {
                        /* loader.show({
                                // Pass props by their camelCased names
                                //container: this.$refs.loadingContainer,
                                canCancel: true, // default false
                                //onCancel: this.yourCallbackMethod,
                                color: '#000000',
                                loader: 'bars',
                                width: 64,
                                height: 64,
                                backgroundColor: '#ffffff',
                                opacity: 0.5,
                                zIndex: 999,
                        }) */

                        const loader = $loading.show({
                                // Optional parameters
                                loader: 'bars',
                        });
                        // simulate AJAX
                        setTimeout(() => {
                                loader.hide()
                        }, 500)
                //}
                next()
        })
        router.afterEach((to, from) => {
                // terminate you loader
                //alert("end")
                //let loader = useLoading();
               /*  setTimeout(() => {
                        loader.hide({active:false})
                },1300) */
               
                //loader.hide()
                
        })
/************************************************************/
const app = Vue.createApp({})
app.component('GDialog',GDialog)
app.use(useLoading)
   .use(router)
   .mount("#app");