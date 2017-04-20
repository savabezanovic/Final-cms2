import Vue from 'vue'
import App from './App.vue'
import router from './router'
import axios from 'axios'

window.axios = axios

window.Events = new Vue();

Vue.config.productionTip = false;

new Vue({
    el: '#app',
    router,
    template: '<App/>',
    components: { App }
})