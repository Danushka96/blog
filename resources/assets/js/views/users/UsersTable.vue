<template>
	<table class="table">
        <thead class="text-primary">
        <th>Name</th>
        <th>Role</th>
        <th>Number of Posts</th>
        <th style="text-align: right"></th>
        </thead>
        <tbody>
            <tr v-for="user in this.users">
                <td>{{user.name}}</td>
                <td>{{user.role}}</td>
                <td>5</td>
                <td align="right">
                    <div>
                    	<router-link class="btn btn-xs btn-primary" :to="'/users/view/' + user.user_id">View</router-link>
                        <a href="#" @click="deleteUser(user.id)"><button class="btn btn-xs btn-danger">Delete</button></a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
	export default {
		name: 'UsersTable',

		data () {
			return {
				users: {},
			}
		},

		created: function () {
			axios.get('admin/user')
				.then((res) => {
					console.log(res)
					this.users = res.data
					console.log(this.users)
				})
				.catch((err) => {console.log(err)})
		},

		methods: {
			deleteUser (id)  {
				axios.get('/admin/user/drop/' + id)
					.then(res => {
						this.users = res.data
						console.log(this.users)
					})
					// console.log(id)
			}
		}

	}
</script>