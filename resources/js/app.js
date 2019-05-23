

window.Vue = require('vue');

// Vue.config.productionTip = false

require('./bootstrap');


import axios from 'axios';

import VueAxios from 'vue-axios';

import VueRouter from 'vue-router'

import Router from './router.js'

import VeeValidate from 'vee-validate'

Vue.use(VueAxios, axios)

Vue.use(VeeValidate)

Vue.use(VueRouter)

Vue.use(VToaster, {timeout: 7000})


axios.defaults.baseURL = 'http://localhost:8000/api';


Vue.component('Home', require('./components/home.vue'));

Vue.component('Course', require('./components/course.vue'));

Vue.component('Register', require('./components/register.vue'));

Vue.component('Login', require('./components/login.vue'));


Router.beforeEach((to, from, next)=>{
    if(to.meta.requiresAuth){
       const authUser = window.localStorage.getItem('token');
       if(authUser){
          next()
        }else {
            next(
                window.location = '/'
            )
        }
    }
    next()
})


const app = new Vue({
    el: '#app',
    router: Router,
    
});
