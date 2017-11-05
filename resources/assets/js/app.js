
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

import Index from './components/Index.vue';
import Portfolio from './components/Portfolio.vue';
import Resume from './components/Resume.vue';
import Contact from './components/Contact.vue';

Vue.use(VueRouter);


// window.Vue = require('vue-devtools');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

console.log('hello');

const app = new Vue({
    el: '#app',
    routes: [
		{ 
			path: '/',
			component: Index,
		},
		{ 
			path: '/portfolio',
			component: Portfolio,
		},
		{ 
			path: '/resume',
			component: Resume,
		},
		{ 
			path: '/contact',
			component: Contact,
		}
	]
});
