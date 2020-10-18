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
                    <a href="{{route('admin-products-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Products</span>
                    </a>
                </li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'admin-research-index' ? "active" : ""}}">
                    <a href="{{route('admin-research-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Research</span>
                    </a>
                </li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'admin-services-index' ? "active" : ""}}">
                    <a href="{{route('admin-services-index')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Services</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
