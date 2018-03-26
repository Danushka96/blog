import VueRouter from 'vue-router'

let routes = [
	{
		path: '/',
		component: require('./views/dashboard/DashboardView.vue'),
	},
	{
		path: '/posts',
		component: require('./views/posts/PostsView.vue'),
	},
	{
		path: '/posts/new',
		component: require('./views/posts/TextEditor.vue')
	},
	{
		path: '/posts/:id',
		component: require('./views/posts/ReadPost.vue')
	},
	{
		path: '/posts/edit/:id',
		component: require('./views/posts/TextEditor.vue')
	},
	{
		path: '/users',
		component: require('./views/users/UsersView.vue'),
	},
	{
		path: '/users/view/:id',
		component: require('./views/users/UserProfile.vue'),
	},
	{
		path: '/users/new',
		component: require('./views/users/NewUser.vue'),
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