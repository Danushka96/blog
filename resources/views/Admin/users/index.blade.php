@extends('Admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" style="background-color: blue"  >
                        <a href="{{url('/admin/user/new')}}" style="color: white">Invite User</a>
                    </button>
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
                                <th>Last Login</th>
                                <th style="text-align: right"></th>
                                </thead>
                                <tbody>
                                @foreach($user as $data)
                                    <tr>
                                        <td>{{$data['fname']}}</td>
                                        <td>Author</td>
                                        <td>{{today()}}</td>
                                        <td align="right">
                                            <div>
                                                    <button class="btn btn-xs btn-primary">View</button>
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