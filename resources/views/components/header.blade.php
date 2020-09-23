<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-lg-2 pr-4 align-items-center">
                <a class="navbar-brand" href="{{route('index')}}">Dr.<span>care</span></a>
            </div>
            <div class="col-lg-10 d-none d-md-block">
                <div class="row d-flex">
                    <div class="col-md-4 pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-map"></span></div>
                        <span class="text">Address: 91 Vassall Street, Quincy MA 02170 USA</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-paper-plane"></span></div>
                        <span class="text">Email: youremail@email.com</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-phone2"></span></div>
                        <span class="text">Phone: +1 555 555 5555</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <p class="button-custom order-lg-last mb-0"><a href="{{route('appointment')}}"
                                                       class="btn btn-secondary py-2 px-3">Make An Appointment</a></p>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'index' ? "active" : ""}}"><a href="{{route('index')}}" class="nav-link pl-0">Home</a></li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'about' ? "active" : ""}}"><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'doctor' ? "active" : ""}}"><a href="{{route('doctor')}}" class="nav-link">Doctor</a></li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'department' ? "active" : ""}}"><a href="{{route('department')}}" class="nav-link">Departments</a></li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'pricing' ? "active" : ""}}"><a href="{{route('pricing')}}" class="nav-link">Pricing</a></li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'blog' ? "active" : ""}}"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'contact' ? "active" : ""}}"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
