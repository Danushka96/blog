<template>
    <li class="dropdown" :class="{'open': show}" >
	    <a href="#" class="dropdown-toggle"  @click="show = !show" @blur="show= !show">
	        <i class="material-icons">notifications</i>
	        <span class="notification">5</span>
	        <p class="hidden-lg hidden-md">Notifications</p>
	    </a>
	    <ul class="dropdown-menu">
	        <li v-for="note in notifications">
	            <a :href="note.url">{{note.message}}</a>
	        </li>
	    </ul>
	</li>
</template>

<script>

	export default {
		name: 'notification-button',
		data () {
			return {
				show: false,
				notifications: [
					{message: 'Mike John responded to your email', url:"admin#/posts"},
					{message: 'You have 5 new tasks', url:"admin#/posts"},
					{message: 'You\'re now friend with Andrew', url:"admin#/users"},
					{message: 'Another Notification', url:"admin#/settings"},
					{message: 'Mike John sent an email', url:"admin#/"},
				]
			}
		},
	}
</script>