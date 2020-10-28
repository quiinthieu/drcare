<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-lg-2 pr-4 align-items-center">
                <a class="navbar-brand" href="{{route('drcare-index')}}">32<span>Smiles</span></a>
            </div>
            <div class="col-lg-10 d-none d-md-block">
                <div class="row d-flex">
                    <div class="col-md-4 pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-map"></span></div>
                        <span class="text">Address: 91 Vassall Street, Quincy, MA 02170 USA</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-paper-plane"></span></div>
                        <span class="text">Email: drcare@email.com</span>
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
        <p class="button-custom order-lg-last mb-0">
            <a href="{{route('drcare-appointments-create')}}" class="btn btn-secondary py-2 px-3">Make An Appointment</a>
        </p>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'drcare-index' ? "active" : ""}}">
                    <a href="{{route('drcare-index')}}" class="nav-link pl-0">Home</a></li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'drcare-about' ? "active" : ""}}">
                    <a href="{{route('drcare-about')}}" class="nav-link pl-0">About Us</a>
                </li>
                <li class="nav-item dropdown {{\Illuminate\Support\Facades\Route::currentRouteName() === 'drcare-patient-education' ? "active" : ""}}">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Patient Education
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach(App\Models\DiseaseType::all() as $diseaseType)
                            <a class="dropdown-item"
                               href="{{route('drcare-patient-education', ['id' => $diseaseType->id])}}">{{$diseaseType->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown {{preg_match('/drcare-professional-education-*/', \Illuminate\Support\Facades\Route::currentRouteName()) ? "active" : ""}}">
                    <a class="nav-link dropdown-toggle" id="professionalEducation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Professional Education
                    </a>
                    <div class="dropdown-menu" aria-labelledby="professionalEducation">
                        <a class="dropdown-item" href="{{route('drcare-professional-education-related-courses')}}">Related Courses</a>
                        <a class="dropdown-item" href="{{route('drcare-professional-education-help-documents')}}">Help Documents</a>
                        <a class="dropdown-item" href="{{route('drcare-professional-education-faculty-resources')}}">Faculty Resources</a>
                        <a class="dropdown-item" href="{{route('drcare-professional-education-student-resources')}}">Student Resources</a>
                        <a class="dropdown-item" href="{{route('drcare-professional-education-case-studies')}}">Case Studies</a>
                    </div>
                </li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'drcare-research' || Illuminate\Support\Facades\Route::currentRouteName() === 'research-single' ? "active" : ""}}">
                    <a href="{{route('drcare-research')}}" class="nav-link">Research</a></li>
                <li class="nav-item dropdown {{\Illuminate\Support\Facades\Route::currentRouteName() === 'drcare-products' ? "active" : ""}}">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach(App\Models\Category::all() as $category)
                            <a class="dropdown-item"
                               href="{{route('drcare-products', ['id' => $category->id])}}">{{$category->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'drcare-messages-create' ? "active" : ""}}">
                    <a href="{{route('drcare-messages-create')}}" class="nav-link">Contact Us</a></li>


            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
