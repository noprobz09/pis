import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuelidate from "vuelidate";
import 'vue-toastr-2/dist/vue-toastr-2.min.css'
import VueToastr2 from 'vue-toastr-2'

import App from './components/App.vue';
import Dashboard from './components/Dashboard/Dashboard.vue';
import PatientAdd from './components/Patient/Add.vue';
import PatientLists from './components/Patient/List.vue';
import PatientDetail from './components/Patient/Detail.vue';

Vue.use(VueRouter)

Vue.config.productionTip = false;

Vue.use(Vuelidate);

window.toastr = require('toastr');

window.URL = URL;
 
Vue.use(VueToastr2)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'dashboard',
            component: Dashboard,
        },
        {
            path: '/home',
            name: 'dashboard',
            component: Dashboard,
        },
        {
            path: '/patient/add',
            name: 'patientAdd',
            component: PatientAdd,
        },
        {
            path: '/patient/lists',
            name: 'patientLists',
            component: PatientLists,
        },
        {
            path: '/patient/:id',
            name: 'patientDetail',
            component: PatientDetail,
        },
    ],
});

/*
  Convert vue object
*/
global.getVueObject = obj => {
    return JSON.parse(JSON.stringify( obj ));
};

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});