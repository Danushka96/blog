<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Edit Profile</h4>
                            <p class="category">Complete your profile</p>
                        </div>
                        <div class="card-content">
                            <form @submit.prevent="onSubmit" @keydown="errors.clear($event)">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control" name="name" v-model="user.name" disabled>
                                            <small class="text-danger" v-if="errors.has('name')" v-text="this.errors.get('name')"></small>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input type="email" class="form-control" name="email" v-model="user.email" autocomplete='email' disabled>
                                            <small class="text-danger" v-if="errors.has('email')" v-text="this.errors.get('email')"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Fist Name</label>
                                            <input type="text" class="form-control" name="fname" v-model="user.fname" autocomplete='first-name'>
                                            <small class="text-danger" v-if="errors.has('fname')" v-text="this.errors.get('fname')"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" class="form-control" name="lname" v-model="user.lname" autocomplete='last-name'>
                                            <small class="text-danger" v-if="errors.has('lname')" v-text="this.errors.get('lname')"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About Me</label>
                                            <div class="form-group label-floating">
                                                <textarea class="form-control" name="about" v-model="user.about" rows="2"></textarea>
                                                <small class="text-danger" v-if="errors.has('about')" v-text="this.errors.get('about')"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right" :disabled="errors.any()">Update Profile</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="img/tim_80x80.png" />
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="category text-gray">CEO / Co-Founder</h6>
                            <h4 class="card-title">Alec Thompson</h4>
                            <p class="card-content">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
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
                user: {},
                errors: new Errors(),
            }
        },

        mounted: function () {
            axios.get('/admin/user/view/' + this.$route.params.id)
                .then((res) => {
                    this.user = res.data
                })
                .catch((err) => {
                    this.errors.record(err.response.data)
                })
        },
        methods: {
            onSubmit () {
                axios.post('/admin/user/update', this.user)
                    .then((res) =>{
                        this.user = res.data;
                    })
                    .catch((err) =>{
                        this.errors.record(err.response.data) 
                        console.log(err)
                    })
            }
        }
    }
</script>