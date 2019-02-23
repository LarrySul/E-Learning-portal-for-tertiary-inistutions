
window.Vue = require('vue');

// import Toaster from 'v-toaster'

import VueRouter from 'vue-router'

import Router from './router.js'

import axios from 'axios'

import VeeValidate from 'vee-validate'

Vue.use(VeeValidate)

Vue.use(VueRouter)

Vue.use(axios)


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
