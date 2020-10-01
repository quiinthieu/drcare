<!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach($doctors as $doctor)
                <div class="col-md-6 col-lg-3 ftco-animate mb-3">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{$doctor->photo}});"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Dr. {{$doctor->name}}</h3>
                            <span class="position mb-2">{{\Illuminate\Support\Facades\DB::table('doctor_types')->find($doctor->doctor_type_id)->name}}</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
{{--            <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                <div class="staff">--}}
{{--                    <div class="img-wrap d-flex align-items-stretch">--}}
{{--                        <div class="img align-self-stretch" style="background-image: url(research/doc-1.jpg);"></div>--}}
{{--                    </div>--}}
{{--                    <div class="text pt-3 text-center">--}}
{{--                        <h3>Dr. Lloyd Wilson</h3>--}}
{{--                        <span class="position mb-2">Neurologist</span>--}}
{{--                        <div class="faded">--}}
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
{{--                            <ul class="ftco-social text-center">--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                <div class="staff">--}}
{{--                    <div class="img-wrap d-flex align-items-stretch">--}}
{{--                        <div class="img align-self-stretch" style="background-image: url(research/doc-2.jpg);"></div>--}}
{{--                    </div>--}}
{{--                    <div class="text pt-3 text-center">--}}
{{--                        <h3>Dr. Rachel Parker</h3>--}}
{{--                        <span class="position mb-2">Ophthalmologist</span>--}}
{{--                        <div class="faded">--}}
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
{{--                            <ul class="ftco-social text-center">--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                <div class="staff">--}}
{{--                    <div class="img-wrap d-flex align-items-stretch">--}}
{{--                        <div class="img align-self-stretch" style="background-image: url(research/doc-3.jpg);"></div>--}}
{{--                    </div>--}}
{{--                    <div class="text pt-3 text-center">--}}
{{--                        <h3>Dr. Ian Smith</h3>--}}
{{--                        <span class="position mb-2">Dentist</span>--}}
{{--                        <div class="faded">--}}
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
{{--                            <ul class="ftco-social text-center">--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                <div class="staff">--}}
{{--                    <div class="img-wrap d-flex align-items-stretch">--}}
{{--                        <div class="img align-self-stretch" style="background-image: url(research/doc-4.jpg);"></div>--}}
{{--                    </div>--}}
{{--                    <div class="text pt-3 text-center">--}}
{{--                        <h3>Dr. Alicia Henderson</h3>--}}
{{--                        <span class="position mb-2">Pediatrician</span>--}}
{{--                        <div class="faded">--}}
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
{{--                            <ul class="ftco-social text-center">--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                <div class="staff">--}}
{{--                    <div class="img-wrap d-flex align-items-stretch">--}}
{{--                        <div class="img align-self-stretch" style="background-image: url(research/doc-5.jpg);"></div>--}}
{{--                    </div>--}}
{{--                    <div class="text pt-3 text-center">--}}
{{--                        <h3>Dr. Lloyd Wilson</h3>--}}
{{--                        <span class="position mb-2">Neurologist</span>--}}
{{--                        <div class="faded">--}}
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
{{--                            <ul class="ftco-social text-center">--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                <div class="staff">--}}
{{--                    <div class="img-wrap d-flex align-items-stretch">--}}
{{--                        <div class="img align-self-stretch" style="background-image: url(research/doc-6.jpg);"></div>--}}
{{--                    </div>--}}
{{--                    <div class="text pt-3 text-center">--}}
{{--                        <h3>Dr. Rachel Parker</h3>--}}
{{--                        <span class="position mb-2">Ophthalmologist</span>--}}
{{--                        <div class="faded">--}}
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
{{--                            <ul class="ftco-social text-center">--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                <div class="staff">--}}
{{--                    <div class="img-wrap d-flex align-items-stretch">--}}
{{--                        <div class="img align-self-stretch" style="background-image: url(research/doc-7.jpg);"></div>--}}
{{--                    </div>--}}
{{--                    <div class="text pt-3 text-center">--}}
{{--                        <h3>Dr. Ian Smith</h3>--}}
{{--                        <span class="position mb-2">Dentist</span>--}}
{{--                        <div class="faded">--}}
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
{{--                            <ul class="ftco-social text-center">--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                <div class="staff">--}}
{{--                    <div class="img-wrap d-flex align-items-stretch">--}}
{{--                        <div class="img align-self-stretch" style="background-image: url(research/doc-8.jpg);"></div>--}}
{{--                    </div>--}}
{{--                    <div class="text pt-3 text-center">--}}
{{--                        <h3>Dr. Alicia Henderson</h3>--}}
{{--                        <span class="position mb-2">Pediatrician</span>--}}
{{--                        <div class="faded">--}}
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
{{--                            <ul class="ftco-social text-center">--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

    </div>
</section>
