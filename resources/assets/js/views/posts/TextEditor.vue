<template>
	<div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">New Post</h4>
                <p class="category">Write Your Post Here</p>
            </div>
            <div class="card-content">
                <form @submit.prevent="onSubmit" @keydown="errors.clear($event)">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group label-floating">
                                <label class="control-label">Post Title</label>
                                <input v-model="title" type="text" class="form-control" name="title">
                                <small class="text-danger" v-if="errors.has('title')" v-text="this.errors.get('title')"></small>
                            </div>
                        </div>
                    </div>
                    <div @keydown="getHtml()" class="col-md-12">
                        <label class="control-label">Write Your Post Here</label>
                        <textarea name="body" class="summernote" id="summernote" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">{{ (this.post_id) ? 'Save': 'Create'}}</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</template>

 <script>
    window.$ = window.jQuery = require('jquery');
	import 'bootstrap'
	import 'summernote/dist/summernote.js'
	import Errors from '../../classes/Errors'

	export default {
		data () {
			return {
				body: '',
				title: '',
				post_id: this.$route.params.id || null,
				errors: new Errors(),
			}
		},
		mounted: function () {
	 		$('.summernote').summernote();
		},
		created: function () {
			if (this.post_id) {
				axios.get('/admin/posts/' + this.post_id)
					.then((res) => {
						this.title = res.data.title;
						$('#summernote').summernote('code', res.data.body);
						console.log(res.data.post_id)
					})
					.catch((err) => {
						console.log(err)
					})
			}	
		},
		methods: {
			getHtml: function () {
				this.body = $('#summernote').summernote('code');
			},

			onSubmit () {
				this.getHtml();

				axios.post('/admin/posts/save', {post_id: this.post_id, title: this.title, body: this.body})
					.then((res) => {
						console.log(res)
						this.post_id = res.data.post_id;
						this.title = res.data.title;
						$('#summernote').summernote('code', res.data.body);
						console.log(res.data.post_id)
					})
					.catch((err) => {
						this.errors.record(err.response.data)
						console.log(err)
					})
			}
		}
	}
</script>
