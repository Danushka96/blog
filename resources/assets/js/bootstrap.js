window.Vue = require('vue')
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

Vue.use(VueRouter);
Vue.use(VueResource);

// try {
//     window.$ = window.jQuery = require('jquery');

//     require('bootstrap-sass');
// } catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


// import './material.min.js'
// require('material');
// window.Chartist = require ('chartist');
// import './bootstrap-notify';
// import './material-dashboard'
// require('material-dashboard');
// import './demo';
// demo.initDashboardPageCharts();
