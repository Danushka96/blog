<template>
    <div class="col-md-12">
        <router-link to="/posts/new" type="button" class="btn btn-primary" style="background-color: blue" >
            NEW
        </router-link>
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">Post List</h4>

            <p class="category">Manage Your Posts From Here</p>
        </div>
        <div class="card-content table-responsive">
            <table class="table">
                <thead class="text-primary">
                    <th>Title</th>
                    <th>Author</th>
                    <th>Views</th>
                    <th></th>
                </thead>
                <tbody>
                        <tr v-for="post in posts">
                            <td>{{post.title}}</td>
                            <td>{{post.name}}</td>
                            <td>20</td>
                            <td align="right">
                                <div>
                                    <router-link :to="'/posts/' + post.post_id "><button class="btn btn-xs btn-primary">View</button></router-link>
                                    <router-link :to="'/posts/edit/' + post.post_id"><button class="btn btn-xs btn-success">Edit</button></router-link>
                                    <a @click="deletePost(post.post_id)"><button class="btn btn-xs btn-danger">Delete</button></a>
                                </div>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</template>

<script>
   export default {
        data () {
            return {
                posts: {},
            }
        },
        created: function () {
            axios.get('/admin/posts')
                .then((res) => {
                    this.posts = res.data
                    console.log(this.posts)
                })
                .catch((err) => {
                    console.log(err.message)
                })
        },
        methods: {
            deletePost: function (id) {
                axios.get("/admin/posts/delete/" + id)
                    .then((res) => {
                        this.posts = res.data
                        console.log(res.data)
                    });
            }
        }
   } 
</script>