@extends('Admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{url('/admin/user/new')}}">
                    <button type="button" class="btn btn-primary" style="background-color: blue"  >
                        Invite User
                    </button>
                    </a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">User List</h4>
                            <p class="category">Manage User Accounts</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>Name</th>
                                <th>Role</th>
                                <th>Number of Posts</th>
                                <th style="text-align: right"></th>
                                </thead>
                                <tbody>
                                @foreach($user as $data)
                                    <tr>
                                        <td>{{$data['fname']}}</td>
                                        <td>{{$role[$data['role']-1]['name']}}</td>
                                        <td>5</td>
                                        <td align="right">
                                            <div>
                                                    <a href="/admin/user/view/{{$data['id']}}"><button class="btn btn-xs btn-primary">View</button>
                                                    <button class="btn btn-xs btn-success">Edit</button>
                                                    <button class="btn btn-xs btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection