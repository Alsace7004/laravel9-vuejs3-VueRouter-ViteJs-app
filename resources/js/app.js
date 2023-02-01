//import Vue from 'vue'
import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
/************************************************/

 //Form Loading
 //import Loading from 'vue-loading-overlay';
 //Import stylesheet
 //import 'vue-loading-overlay/dist/vue-loading.min.css';
  import {useLoading} from 'vue-loading-overlay'
 //import {LoadingPlugin} from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/css/index.css';

    
    /* const $loading = LoadingPlugin({
        // options
    }); */
//Vue.use(Loading);
//console.log("Je suis executé depuis app js !!!")
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
createApp(App)
        .use(useLoading)
        .use(router)
        .mount("#app");