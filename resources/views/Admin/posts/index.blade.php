@extends('Admin.layouts.app')
@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
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
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dakota Rice</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td class="text-primary">$36,738</td>
                                            </tr>
                                            <tr>
                                                <td>Minerva Hooper</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                                <td class="text-primary">$23,789</td>
                                            </tr>
                                            <tr>
                                                <td>Sage Rodriguez</td>
                                                <td>Netherlands</td>
                                                <td>Baileux</td>
                                                <td class="text-primary">$56,142</td>
                                            </tr>
                                            <tr>
                                                <td>Philip Chaney</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                                <td class="text-primary">$38,735</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Greene</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                                <td class="text-primary">$63,542</td>
                                            </tr>
                                            <tr>
                                                <td>Mason Porter</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                                <td class="text-primary">$78,615</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection