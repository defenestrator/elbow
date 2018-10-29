
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'))
Vue.component('contest-entry', require('./components/ContestEntry.vue'))
Vue.component('countdown', require('./components/Countdown.vue'));

const app = new Vue({
    el: '#app'
});

const swa=document.createElement('link');
swa.href='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.3.1/sweetalert2.min.css';
swa.rel='stylesheet';
document.getElementsByTagName('head')[0].appendChild(swa);