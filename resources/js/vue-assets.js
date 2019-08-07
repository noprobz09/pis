import 'vue-toastr-2/dist/vue-toastr-2.min.css'

window.axios = require('axios');

window.Vue = require('vue');

window.toastr = require('toastr');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

export const EventBus = new Vue();