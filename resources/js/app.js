/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');
 import Vue from 'vue';
 import VueRouter from 'vue-router'
 import routes from './routes'
 import index from './index.vue'
 import vuetify from './vuetify';
 import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
 import { library } from '@fortawesome/fontawesome-svg-core'
import { faEye, faPen, faTrash, faCamera, faSignOutAlt } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import coreState from './coreState'
library.add(faEye, faTrash, faCamera, faSignOutAlt, faPen )

Vue.component('font-awesome-icon', FontAwesomeIcon)
 // Import Bootstrap an BootstrapVue CSS files (order is important)
 import 'bootstrap/dist/css/bootstrap.css'
 import 'bootstrap-vue/dist/bootstrap-vue.css'
 
 // Make BootstrapVue available throughout your project
 Vue.use(BootstrapVue)
 // Optionally install the BootstrapVue icon components plugin
 Vue.use(IconsPlugin)
 Vue.use(VueRouter)
 window.Vue = require('vue');
 
 /**
  * The following block of code may be used to automatically register your
  * Vue components. It will recursively scan this directory for the Vue
  * components and automatically register them with their "basename".
  *
  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
  */
 
 // const files = require.context('./', true, /\.vue$/i)
 // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
 
 Vue.component('Home', require('./components/HomeComponent.vue').default);
 
 /**
  * Next, we will create a fresh Vue application instance and attach it to
  * the page. Then, you may begin adding components to this application
  * or customize the JavaScript scaffolding to fit your unique needs.
  */
 
 const app = new Vue({
     el: '#app',
     vuetify,
     router: new VueRouter(routes),
     components: {
         index
     },
     store: coreState
 });
 