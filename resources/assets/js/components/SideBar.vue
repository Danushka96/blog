<template>
		   <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Spartan Blogging
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <router-link tag="li" to="/" exact>
                    <a>
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </router-link>
                <router-link tag="li" to="/posts">
                    <a href="">
                        <i class="material-icons">content_paste</i>
                        <p>Posts</p>
                    </a>
                </router-link>
                <router-link tag="li" to="/users">
                    <a href="">
                        <i class="material-icons">person</i>
                        <p>Users</p>
                    </a>
                </router-link>
                <router-link tag="li" to="/settings">
                    <a href="">
                        <i class="material-icons">settings</i>
                        <p>Site Settings</p>
                    </a>
                </router-link>
            </ul>
        </div>
    </div>
</template>

<script>
	export default {

	}
</script>

<style>
	#d {
		height: 50px;
		width: 50px;
		background: red;
	}
</style>