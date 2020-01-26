
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import { InertiaApp } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import route from 'ziggy'
import { Ziggy } from './ziggy'

Vue.use(InertiaApp)

const app = document.getElementById('app')

Vue.prototype.$route = (...args) => route(...args).url()

new Vue({
  render: h => h(InertiaApp, {
    props: {
      initialPage: JSON.parse(app.dataset.page),
      resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
    },
  }),
}).$mount(app)


