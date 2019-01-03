
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// import App from './App.vue'

import VueRouter from 'vue-router'

// import Toaster from 'v-toaster'

import Router from './router.js'

// import axios from 'axios'

// import VeeValidate from 'vee-validate'

// Vue.use(VeeValidate)

Vue.use(VueRouter)


Vue.component('Home', require('./components/home.vue'));

Vue.component('Course', require('./components/course.vue'));

Vue.component('Blog', require('./components/blog.vue'));

Vue.component('Register', require('./components/register.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: Router
    
});
