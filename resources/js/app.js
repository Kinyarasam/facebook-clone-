/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap')

window.Vue = require('vue').default

// import Vue from 'vue'
import VueRouter from 'vue-router'
// import VueTailwind from 'vue-tailwind'

Vue.use(VueRouter)
    // Vue.use(VueTailwind, components)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

let routes = [
    { path: '/', component: require('./components/auth/Login.vue').default },
    { path: '/login', components: require('./components/auth/Login.vue').default }
]

const router = new VueRouter({
    routes
})

// Vue.component('/', require('./components/Home.vue'))
// Vue.component('/createAccount', require('./components/auth/CreateAccount.vue').default)



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
}).$mount('#app')