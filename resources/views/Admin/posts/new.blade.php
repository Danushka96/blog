<!doctype html>
<html lang="en">

<head>
    {{--<meta charset="utf-8" />--}}
    {{--<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}" />--}}
    {{--<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />--}}
    <title>Spartan Bloggin Control Panel</title>
    {{--<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />--}}
    {{--<meta name="viewport" content="width=device-width" />--}}
    {{--<!-- Bootstrap core CSS     -->--}}
    {{--<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />--}}
    {{--<!--  Material Dashboard CSS    -->--}}

    {{--<!--  CSS for Demo Purpose, don't include it in your project     -->--}}
    {{--<link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />--}}
    {{--<!--     Fonts and icons     -->--}}
    {{--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">--}}
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>


    <!-- include libraries(jQuery, bootstrap) -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

        <!-- include summernote css/js-->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

        <script>
            $(document).ready(function() {
                $('.summernote').summernote();
            });
        </script>
    <link href="{{asset('/assets/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Spartan Blogging
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="/admin">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/admin/posts">
                        <i class="material-icons">content_paste</i>
                        <p>Posts</p>
                    </a>
                </li>
                <li {{(Request::is('admin/user')||Request::is('admin/user/new') ? 'class=active' : '')}}>
                    <a href="/admin/user">
                        <i class="material-icons">person</i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                    <a href="/typography">
                        <i class="material-icons">settings</i>
                        <p>Site Settings</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Material Dashboard </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Mike John responded to your email</a>
                                </li>
                                <li>
                                    <a href="#">You have 5 new tasks</a>
                                </li>
                                <li>
                                    <a href="#">You're now friend with Andrew</a>
                                </li>
                                <li>
                                    <a href="#">Another Notification</a>
                                </li>
                                <li>
                                    <a href="#">Another One</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group  is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
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
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Write Your Post Here</label>
                                    <textarea name="body" class="summernote" id="summernote" ></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
        <footer class="footer">
            <div class="container-fluid">
{{----}}
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="#">Project Name</a>, made with love for a better web
                </p>
            </div>
        </footer>
    </div>
</div>

{{--<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/js/material.min.js')}}" type="text/javascript"></script>--}}
{{--<!--  Charts Plugin -->--}}
{{--<script src="{{asset('assets/js/chartist.min.js')}}"></script>--}}
{{--<!--  Dynamic Elements plugin -->--}}
{{--<script src="{{asset('assets/js/arrive.min.js')}}"></script>--}}
{{--<!--  PerfectScrollbar Library -->--}}
{{--<script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>--}}
{{--<!--  Notifications Plugin    -->--}}
{{--<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>--}}
{{--<!--  Google Maps Plugin    -->--}}
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
{{--<!-- Material Dashboard javascript methods -->--}}
{{--<script src="{{asset('assets/js/material-dashboard.js?v=1.2.0')}}"></script>--}}
{{--<!-- Material Dashboard DEMO methods, don't include it in your project! -->--}}
{{--<script src="{{asset('assets/js/demo.js')}}"></script>--}}
{{--<script type="text/javascript">--}}
    {{--$(document).ready(function() {--}}

        {{--// Javascript method's body can be found in assets/js/demos.js--}}
        {{--demo.initDashboardPageCharts();--}}

    {{--});--}}
{{--</script>--}}

</body>
</html>