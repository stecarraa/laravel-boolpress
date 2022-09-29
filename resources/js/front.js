import VueRouter from 'vue-router';
import Vue from 'vue';


window.Vue = require('vue');

import App from './views/App.vue';
import router from './router';

Vue.use(VueRouter);


const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});