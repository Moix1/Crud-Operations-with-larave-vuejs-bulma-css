
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

let Myheader = require('./components/Myheader.vue');
let Myfooter = require('./components/MyFooter.vue');
let Home     = require('./components/Home.vue');
let About    = require('./components/About.vue');


const routes = [
	{path: '/home', component:Home},
	{path: '/about', component:About}
]

const router = new VueRouter({
	//mode: 'history',
	routes
})


const app = new Vue({
    el: '#app',
    router,
    components:{Myheader,Myfooter}
});
