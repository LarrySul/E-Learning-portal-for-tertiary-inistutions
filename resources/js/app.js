

window.Vue = require('vue');

Vue.config.productionTip = false

import axios from 'axios'

import VueAxios from 'vue-axios'

import VueRouter from 'vue-router'

import Router from './router.js'


import VeeValidate from 'vee-validate'

Vue.use(VueAxios, axios)

Vue.use(VeeValidate)

Vue.use(VueRouter)

axios.defaults.baseURL = 'http://localhost:8000/';
// Vue.use(Toaster, { timeout: 7000 })

Vue.component('Home', require('./components/home.vue'));

Vue.component('Course', require('./components/course.vue'));

Vue.component('Blog', require('./components/blog.vue'));

Vue.component('Register', require('./components/register.vue'));

Vue.component('Login', require('./components/login.vue'));


const app = new Vue({
    el: '#app',
    router: Router
    
});
