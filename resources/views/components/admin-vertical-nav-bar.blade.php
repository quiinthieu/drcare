<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'admin-dashboard' ? "active" : ""}}">
                    <a href="{{route('admin-dashboard')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'admin-appointments-index' ? "active" : ""}}">
                    <a href="{{route('admin-appointments-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Appointments</span>
                    </a>
                </li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'admin-diseases-index' ? "active" : ""}}">
                    <a href="{{route('admin-diseases-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Diseases</span>
                    </a>
                </li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'admin-doctors-index' ? "active" : ""}}">
                    <a href="{{route('admin-doctors-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Doctors</span>
                    </a>
                </li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'admin-products' ? "active" : ""}}">
                    <a href="{{route('admin-products')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Products</span>
                    </a>
                </li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'admin-research' ? "active" : ""}}">
                    <a href="{{route('admin-research')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Research</span>
                    </a>
                </li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'admin-services' ? "active" : ""}}">
                    <a href="{{route('admin-services')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Services</span>
                    </a>
                </li>
                {{--                                <li class="nav-item pcoded-hasmenu">--}}
                {{--                                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>--}}
                {{--                                    <ul class="pcoded-submenu">--}}
                {{--                                        <li><a href="{{route('layout-vertical')}}" target="_blank">Vertical</a></li>--}}
                {{--                                        <li><a href="{{route('layout-horizontal')}}" target="_blank">Horizontal</a></li>--}}
                {{--                                    </ul>--}}
                {{--                                </li>--}}
                {{--                <li class="nav-item pcoded-menu-caption">--}}
                {{--                    <label>UI Element</label>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item pcoded-hasmenu">--}}
                {{--                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>--}}
                {{--                    <ul class="pcoded-submenu">--}}
                {{--                        <li><a href="{{route('bc-alert')}}">Alert</a></li>--}}
                {{--                        <li><a href="{{route('bc-button')}}">Button</a></li>--}}
                {{--                        <li><a href="{{route('bc-badges')}}">Badges</a></li>--}}
                {{--                        <li><a href="{{route('bc-breadcrumb-pagination')}}">Breadcrumb & paggination</a></li>--}}
                {{--                        <li><a href="{{route('bc-card')}}">Cards</a></li>--}}
                {{--                        <li><a href="{{route('bc-collapse')}}">Collapse</a></li>--}}
                {{--                        <li><a href="{{route('bc-carousel')}}">Carousel</a></li>--}}
                {{--                        <li><a href="{{route('bc-grid')}}">Grid system</a></li>--}}
                {{--                        <li><a href="{{route('bc-progress')}}">Progress</a></li>--}}
                {{--                        <li><a href="{{route('bc-modal')}}">Modal</a></li>--}}
                {{--                        <li><a href="{{route('bc-spinner')}}">Spinner</a></li>--}}
                {{--                        <li><a href="{{route('bc-tabs')}}">Tabs & pills</a></li>--}}
                {{--                        <li><a href="{{route('bc-typography')}}">Typography</a></li>--}}
                {{--                        <li><a href="{{route('bc-tooltip-popover')}}">Tooltip & popovers</a></li>--}}
                {{--                        <li><a href="{{route('bc-toasts')}}">Toasts</a></li>--}}
                {{--                        <li><a href="{{route('bc-extra')}}">Other</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item pcoded-menu-caption">--}}
                {{--                    <label>Forms &amp; table</label>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a href="{{route('form-elements')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a href="{{route('tbl-bootstrap')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item pcoded-menu-caption">--}}
                {{--                    <label>Chart & Maps</label>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a href="{{route('chart-apex')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a href="{{route('map-google')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item pcoded-menu-caption">--}}
                {{--                    <label>Pages</label>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item pcoded-hasmenu">--}}
                {{--                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>--}}
                {{--                    <ul class="pcoded-submenu">--}}
                {{--                        <li><a href="{{route('auth-signup')}}" target="_blank">Sign up</a></li>--}}
                {{--                        <li><a href="{{route('auth-signin')}}" target="_blank">Sign in</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a href="{{route('sample-page')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a>--}}
                {{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>
