/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
/*
require('./bootstrap');
//require('easy-autocomplete/dist/jquery.easy-autocomplete');
//import vue from 'vue';

window.Vue = require('vue').default;

import VueAxios from 'vue-axios';
import axios from 'axios';
import App from './components/App.vue';

//Importamos y configuramos el el vue-router

import VueRouter from 'vue-router';
import { routes } from './routes';
import Vue from 'vue';
Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({

    mode: 'history',
    routes: routes

});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('articulos', require('./components/Articulos.vue').default);
//Vue.component('articulos-autocomplete', require('./components/ArticulosAutocomplete.vue').default);
//Vue.component('autocomplete-component', require('./components/AutocompleteComponent.vue').default);
//Vue.component('tareas', require('./components/Tareas.vue').default);
//Vue.component('articulos', require('./components/Articulos.vue').default);
//Vue.component('mostrar-motivos', require('./components/motivo/Index.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*const app = new Vue({

    el: '#app',
    router: router,
    render: h => h(app)


}); 
*/
/*require('./bootstrap');
import vue from 'vue'
window.Vue = vue;

import App from './components/App.vue';

//importamos Axios
import VueAxios from 'vue-axios';
import axios from 'axios';

//Importamos y configuramos el Vue-router
import VueRouter from 'vue-router';
import { routes } from './routes';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});


Vue.component('mostrar-motivos', require('./components/motivo/Index.vue').default);
//finalmente, definimos nuestra app de Vue
const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
}); */
//import vue
require('./bootstrap');


import Vue from 'vue';
import App from './components/App.vue';

//importamos Axios
import VueAxios from 'vue-axios';
import axios from 'axios';

//Importamos y configuramos el Vue-router
import VueRouter from 'vue-router';
import { routes } from './routes';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

window.Vue = require("vue").default;


//register component
Vue.component('mostrar-motivos', require('./components/motivo/mostrarMotivos.vue').default);
Vue.component('crear-motivo', require('./components/motivo/Crear.vue').default);



const app = new Vue({
    el: '#app',
    router: router,
    //render: h => h(App),
});