<template>
    <li>
        <router-link :to="'/users/view/3'" class="dropdown-toggle" data-toggle="dropdown">
            <i class="material-icons">person</i>
            <p class="hidden-lg hidden-md">Profile</p>
        </router-link>
    </li>
</template>

<script>
	export default {
		name: 'profile-button',
	}
</script>