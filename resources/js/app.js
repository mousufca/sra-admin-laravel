/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');
import  moment from 'moment';
import VueProgressBar from 'vue-progressbar'
import swal from 'sweetalert2'


import { Form, HasError, AlertError } from 'vform';

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

window.swal = swal;

import VueRouter from 'vue-router'
Vue.use(VueRouter);

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', swal.stopTimer)
        toast.addEventListener('mouseleave', swal.resumeTimer)
    }
})
window.toast = toast;

const options = {
    color: '#6610f2',
    failedColor: '#e83e8c',
    thickness: '3px'
}

Vue.use(VueProgressBar, options)


let routes = [
  { path: '/dashboard', component: require('./components/admin/Dashboard.vue').default },
  { path: '/admins', component: require('./components/admin/admins/all.vue').default },
    { path: '/add-admin', component: require('./components/admin/admins/add.vue').default },
  { path: '/students', component: require('./components/admin/students/all.vue').default },
  { path: '/normal-users', component: require('./components/admin/users/all.vue').default },
 ]

const router = new VueRouter({
	mode: 'history',
  	routes // short for `routes: routes`
})

Vue.filter('toCap',function (value) {
    return value.charAt(0).toUpperCase() + value.slice(1)
})

Vue.filter('toDate',function (value) {
    return moment(value).format("MMM Do YY");
})


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
