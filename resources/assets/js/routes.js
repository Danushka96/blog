import VueRouter from 'vue-router'

let routes = [
	{
		path: '/',
		component: require('./views/DashboardView.vue'),
	},
	{
		path: '/posts',
		component: require('./views/PostsView.vue'),
	},
	{
		path: '/users',
		component: require('./views/UsersView.vue'),
	},
	{
		path: '/settings',
		component: require('./views/SettingsView.vue'),
	}
]

export default new VueRouter({
	routes,
	linkActiveClass: 'active',
});