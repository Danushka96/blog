@include('Admin.layouts.header')

<body>
    <div class="wrapper">
        <div id="app">
        {{-- @include('Admin.layouts.sidebar') --}}
        <side-bar></side-bar>
        <div class="main-panel">
            <nav-bar></nav-bar>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                            {{-- @yield('content') --}}
                            <router-view></router-view>
                    </div>
                </div>
            </div>

            @include('Admin.layouts.footer')
        </div>
    </div> 
        </div>

    {{-- <script src="js/jquery-3.2.1.min.js" ></script> --}}
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    {{-- <script src="js/material.min.js"></script> --}}

    <!--  Dynamic Elements plugin -->
    {{-- <script src="js/arrive.min.js"></script> --}}  
    <!--  PerfectScrollbar Library -->
    {{-- <script src="js/perfect-scrollbar.jquery.min.js"></script> --}}

    <script src="js/manifest.js"></script>
    <script src="js/vendor.js"></script>
    <script src="js/app.js"></script>

    <!--  Notifications Plugin    -->

    {{-- @stack('scripts') --}}
</body>
</html>