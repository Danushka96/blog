<template>
	<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add New User</h4>
                            <p class="category">Account Details</p>
                        </div>
                        <div class="card-content">
                            <form @submit.prevent="onSubmit" @keydown="errors.clear($event)">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Username</label>
                                            <input v-model="user.name" type="text" class="form-control" name="name">
                                            <small class="text-danger" v-if="errors.has('name')" v-text="this.errors.get('name')"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input v-model="user.email" type="email" class="form-control" name="email">
                                           <small class="text-danger" v-if="errors.has('email')" v-text="this.errors.get('email')"></small> 
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">password</label>
                                        <input v-model="user.password" type="password" class="form-control" name="password" autocomplete="password">
                                        <small class="text-danger" v-if="errors.has('password')" v-text="this.errors.get('password')"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">First Name</label>
                                            <input v-model="user.fname" type="text" class="form-control" name="fname">
                                            <small class="text-danger" v-if="errors.has('fname')" v-text="this.errors.get('fname')"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Last Name</label>
                                            <input v-model="user.lname" type="text" class="form-control" name="lname">
                                            <small class="text-danger" v-if="errors.has('lname')" v-text="this.errors.get('lname')"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Select Role</label>
                                            <select v-model="user.role" name="role" class="form-control">
                                                <option value="1">Admin</option>
                                                <option value="2">Author</option>
                                                <option value="3">Subscriber</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right" :disabled="errors.any()">Add User</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
	import Errors from '../../classes/Errors'

	export default {
		data () {
			return {
				user: {role:1},
				errors: new Errors(),
			}
		},

		methods: {
			onSubmit () {
				axios.post('/admin/user/add', this.user)
					.then((res) =>{
						this.$router.push('/users');
					})
					.catch((err) => {
						this.errors.record(err.response.data)
					})
				}
			}
		}
</script>