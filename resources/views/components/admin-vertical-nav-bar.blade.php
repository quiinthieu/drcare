<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item {{(request()->is('admin/dashboard*')) ? "active" : ""}}">
                    <a href="{{route('admin-dashboard')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-bar-chart"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                  <li class="nav-item {{(request()->is('admin/messages*'))  ? "active" : ""}}">
                    <a href="{{route('admin-messages-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Contact</span>
                    </a>
                </li>
                <li class="nav-item {{(request()->is('admin/appointments*'))  ? "active" : ""}}">
                    <a href="{{route('admin-appointments-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-clock"></i>
                        </span>
                        <span class="pcoded-mtext">Appointments</span>
                    </a>
                </li>
                <li class="nav-item {{(request()->is('admin/diseases*')) ? "active" : ""}}">
                    <a href="{{route('admin-diseases-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-cloud-rain"></i>
                        </span>
                        <span class="pcoded-mtext">Diseases</span>
                    </a>
                </li>
                <li class="nav-item {{(request()->is('admin/doctors*')) ? "active" : ""}}">
                    <a href="{{route('admin-doctors-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-heart"></i>
                        </span>
                        <span class="pcoded-mtext">Doctors</span>
                    </a>
                </li>
                <li class="nav-item {{(request()->is('admin/products*')) ? "active" : ""}}">
                    <a href="{{route('admin-products-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-box"></i>
                        </span>
                        <span class="pcoded-mtext">Products</span>
                    </a>
                </li>
                <li class="nav-item {{(request()->is('admin/research*')) ? "active" : ""}}">
                    <a href="{{route('admin-research-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-file-text"></i>
                        </span>
                        <span class="pcoded-mtext">Research</span>
                    </a>
                </li>
                <li class="nav-item {{(request()->is('admin/services*')) ? "active" : ""}}">
                    <a href="{{route('admin-services-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-umbrella"></i>
                        </span>
                        <span class="pcoded-mtext">Services</span>
                    </a>
                </li>
{{--                <li class="nav-item pcoded-hasmenu">--}}
{{--                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Professional Education</span></a>--}}
{{--                    <ul class="pcoded-submenu">--}}
{{--                        <li><a href="{{route('admin-documents-index')}}">Related Documents</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>
