<template>
	<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">{{post.title}}</h4>
                        </div>
                        <div class="card-content table-responsive">
                        	<p v-html="post.body"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
	export default {
		data ()  {
			return {
				post: {},
			}
		},
		created: function () {
			axios.get('/admin/posts/' + this.$route.params.id)	
				.then((res) => {
					this.post = res.data
				})
		},
	}
</script>