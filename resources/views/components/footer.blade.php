<!-- He who is contented is rich. - Laozi -->
<footer class="ftco-footer ftco-bg-dark ftco-section pb-3 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 logo">Dr. <span>Care</span></h2>
                    <p>{{Faker\Factory::create()->realText(100)}}</p>
                </div>
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">91 Vassall Street, Quincy, MA 02170 USA</span>
                            </li>
                            <li><a href="tel:+15555555555"><span class="icon icon-phone"></span><span
                                        class="text">+1 555 555 5555</span></a></li>
                            <li><a href="mailto:drcare@email.com"><span class="icon icon-envelope"></span><span class="text">drcare@email.com</span></a>
                            </li>
                        </ul>
                    </div>

                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="https://twitter.com/" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/" target="_blank"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/" target="_blank"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('drcare-index')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                        <li><a href="{{route('drcare-about')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                        <li><a href="{{route('drcare-research')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Research</a></li>
                        <li><a href="{{route('admin-dashboard')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Admin Dashboard</li>
{{--                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>--}}
{{--                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>--}}
{{--                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>--}}
                    </ul>
                </div>
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Patient Education</h2>
                    <ul class="list-unstyled">
                        @foreach(\App\Models\DiseaseType::all() as $diseaseType)
                            <li>
                                <a href="{{route('drcare-patient-education', ['id' => $diseaseType->id])}}">
                                    <span class="ion-ios-arrow-round-forward mr-2"></span>{{$diseaseType->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Opening Hours</h2>
                    <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>We are open 24/7</h3>
                </div>
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Subscribe Us!</h2>
                    <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="form-control submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a
                        href="{{route('drcare-index')}}">Dr. Care</a>
                </p>
            </div>
        </div>
    </div>
</footer>
