@extends('Admin.layouts.app')
@section('content')

<div class="col-md-12">
    <a href="/admin/posts/new">
    <button type="button" class="btn btn-primary" style="background-color: blue" >
        NEW
    </button>
    </a>
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
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post['title']}}</td>
                            <td>{{$users[$post['userid']]}}</td>
                            <td>20</td>
                            <td align="right">
                                <div>
                                    <a href="/admin/posts/{{$post['id']}}"><button class="btn btn-xs btn-primary">View</button></a>
                                    <a href="/admin/user/view/"><button class="btn btn-xs btn-success">Edit</button></a>
                                    <a href="/admin/user/drop/" onclick="return confirmdelete()"><button class="btn btn-xs btn-danger">Delete</button></a>
                                </div>
                                <script>
                                    function confirmdelete() {
                                        if(!confirm("Are You Sure to delete this"))
                                            event.preventDefault();
                                    }
                                </script>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection