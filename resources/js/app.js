import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router';

//console.log("Je suis executé depuis app js !!!")
/************************************************************/
        
/************************************************************/
createApp(App)
        .use(router)
        .mount("#app");