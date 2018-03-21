@extends('Admin.layouts.app')
@push('styles')
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">

    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

    <link href="{{asset('/assets/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
@endpush

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">New Post</h4>
            <p class="category">Write Your Post Here</p>
        </div>
        <div class="card-content">
            <form method="post" name="update" action="/admin/user/update">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group label-floating">
                            <label class="control-label">Post Title</label>
                            <input type="text" class="form-control" name="name" value="{{$summernote['title']}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="control-label">Write Your Post Here</label>
                    <textarea name="body" class="summernote" id="summernote" >{{$summernote['body']}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>

@endsection


@push('scripts')
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> --}}
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
        <script>
            $(document).ready(function() {
                $('.summernote').summernote();
            });
        </script>
@endpush