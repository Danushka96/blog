<template>
	<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="url('/admin/user/new')">
                    <button type="button" class="btn btn-primary" style="background-color: blue"  >
                        Invite User
                    </button>
                    </a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Settings</h4>
                            <p class="category">Manage User Accounts Settings</p>
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
                                <!-- @foreach($user as $data) -->
                                    <tr>
                                        <td>fname</td>
                                        <td>$role[$data['role']-1]['name']</td>
                                        <td>5</td>
                                        <td align="right">
                                            <div>
                                                <a href="/admin/user/view/$data['id']"><button class="btn btn-xs btn-primary">View</button></a>
                                                <a href="/admin/user/drop/$data['id']" onclick="return confirmdelete()"><button class="btn btn-xs btn-danger">Delete</button></a>
                                            </div>
                                        </td>
                                    </tr>
                                <!-- @endforeach -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>