@include('Admin.layouts.header')

<body>
    <div class="wrapper">

         @include('Admin.layouts.sidebar')

        <div class="main-panel">
            @include('Admin.layouts.navbar') 

            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                            @yield('content')
                    </div>
                </div>
            </div>

            @include('Admin.layouts.footer')
        </div>
    </div>

    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/material.min.js')}}" type="text/javascript"></script>

    <!--  Dynamic Elements plugin -->
    <script src="{{asset('assets/js/arrive.min.js')}}"></script>
    <!--  PerfectScrollbar Library -->
    <script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--  Notifications Plugin    -->

    @stack('scripts')
</body>
</html>