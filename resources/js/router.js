import Vue from 'vue'

import VueRouter from 'vue-router'

import axios from 'axios'

import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios)

Vue.use(VueRouter)


const routes = [
   {path : '/course',  name: 'Course', meta:{requiresAuth: true}},
   {path : '/',  name: 'Home'}
]

const router = new VueRouter({
   mode: "history",
   routes
});


export default router