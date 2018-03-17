@extends('Admin.layouts.app')
@section('content')
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
                            <form method="post" action="/admin/user/add">
                                <div class="row">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control" name="  name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">First Name</label>
                                            <input type="text" class="form-control" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" class="form-control" name="lname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Select Role</label>
                                            <select name="role" class="form-control">
                                                <option value="1">Admin</option>
                                                <option value="2">Author</option>
                                                <option value="3">Subscriber</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Add User</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection