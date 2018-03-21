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
                <li {{(Request::is('admin') ? 'class=active' : '')}}>
                    <a href="/admin">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li {{(Request::is('admin/posts')||Request::is('admin/posts/new') ? 'class=active' : '')}}>
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
                {{--<li>--}}
                    {{--<a href="/icons">--}}
                        {{--<i class="material-icons">bubble_chart</i>--}}
                        {{--<p>Icons</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="/maps">--}}
                        {{--<i class="material-icons">location_on</i>--}}
                        {{--<p>Maps</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="/notifications">--}}
                        {{--<i class="material-icons text-gray">notifications</i>--}}
                        {{--<p>Notifications</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>