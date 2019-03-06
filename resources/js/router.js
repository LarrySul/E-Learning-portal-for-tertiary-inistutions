import Vue from 'vue'

import VueRouter from 'vue-router'

import axios from 'axios'

import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios)

Vue.use(VueRouter)

 const router = new VueRouter({
   routes: [
    //  {
    //    path: "/",
    //    component: Home
    //  },
    //  {
    //    path: "/course",
    //    component: Course
    //  },
    //  {
    //    path: "/blog",
    //    component: Blog
    //  },
    //  {
    //   path: "/register",
    //   component: Register
    // }

   ],

   mode: "history"
 });

export default router