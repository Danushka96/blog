require('./bootstrap');

import router from './routes'

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('side-bar', require('./components/SideBar.vue'));
Vue.component('nav-bar', require('./components/navbar/NavBar.vue'));
Vue.component('dashboard-view', require('./views/dashboard/DashboardView.vue'));
Vue.component('posts-view', require('./views/posts/PostsView.vue'));
Vue.component('users-view', require('./views/users/UsersView.vue'));
Vue.component('settings-view', require('./views/SettingsView.vue'));

const app = new Vue({
    el: '#app',
    router,
});
