<!-- Very little is needed to make a happy life. - Marcus Antoninus -->
<!-- Order your soul. Reduce your wants. - Augustine -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Diseases</span>
                <h2 class="mb-4">{{\App\Models\DiseaseType::find($id)->name}}</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="ftco-departments">
            <div class="row">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        @foreach(array_values(\App\Models\Disease::all()->where('disease_type_id', $id)->toArray()) as $key => $disease)
                            <a class="nav-link ftco-animate {{$key === 0 ? "active" : ""}}" id="v-pills-{{$key}}-tab" data-toggle="pill"
                               href="#v-pills-{{$key}}"
                               role="tab" aria-controls="v-pills-{{$key}}" aria-selected="{{$key === 0}}">{{$disease['name']}}</a>
                        @endforeach
{{--                        <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill"--}}
{{--                           href="#v-pills-1"--}}
{{--                           role="tab" aria-controls="v-pills-1" aria-selected="true">Neurology</a>--}}

{{--                        <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"--}}
{{--                           role="tab" aria-controls="v-pills-2" aria-selected="false">Surgical</a>--}}

{{--                        <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"--}}
{{--                           role="tab" aria-controls="v-pills-3" aria-selected="false">Dental</a>--}}

{{--                        <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4"--}}
{{--                           role="tab" aria-controls="v-pills-4" aria-selected="false">Ophthalmology</a>--}}

{{--                        <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5"--}}
{{--                           role="tab" aria-controls="v-pills-5" aria-selected="false">Cardiology</a>--}}

                    </div>
                </div>
                <div class="col-md-12 tab-wrap">

                    <div class="tab-content bg-light p-4 p-md-5 ftco-animate" id="v-pills-tabContent">
                        @foreach(array_values(\App\Models\Disease::all()->where('disease_type_id', $id)->toArray()) as $key => $disease)
                            <div class="tab-pane fade {{$key === 0 ? "py-2 show active" : ""}}" id="v-pills-{{$key}}" role="tabpanel"
                                 aria-labelledby="day-{{$key}}-tab">
                                <div class="row departments">
                                    <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                        <div class="img d-flex align-self-stretch"
                                             style="background-image: url({{asset('images/dept-1.jpg')}});"></div>
                                    </div>
                                    <div class="col-lg-8">
                                        <h2>Neurological Deparments</h2>
                                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                                            it
                                            came from it would have been rewritten a thousand times and everything that
                                            was
                                            left from its origin would be the word.</p>
                                        <div class="row mt-5 pt-2">
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-first-aid-kit"></span></div>
                                                    <div class="text">
                                                        <h3>Primary Care</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries
                                                            Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-dropper"></span></div>
                                                    <div class="text">
                                                        <h3>Lab Test</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries
                                                            Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-experiment-results"></span></div>
                                                    <div class="text">
                                                        <h3>Symptom Check</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries
                                                            Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-heart-rate"></span></div>
                                                    <div class="text">
                                                        <h3>Heart Rate</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries
                                                            Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

{{--                        <div class="tab-pane py-2 fade show active" id="v-pills-1" role="tabpanel"--}}
{{--                             aria-labelledby="day-1-tab">--}}
{{--                            <div class="row departments">--}}
{{--                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">--}}
{{--                                    <div class="img d-flex align-self-stretch"--}}
{{--                                         style="background-image: url({{asset('images/dept-1.jpg')}});"></div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-8">--}}
{{--                                    <h2>Neurological Deparments</h2>--}}
{{--                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where--}}
{{--                                        it--}}
{{--                                        came from it would have been rewritten a thousand times and everything that--}}
{{--                                        was--}}
{{--                                        left from its origin would be the word.</p>--}}
{{--                                    <div class="row mt-5 pt-2">--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-first-aid-kit"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Primary Care</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-dropper"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Lab Test</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-experiment-results"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Symptom Check</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-heart-rate"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Heart Rate</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel"--}}
{{--                             aria-labelledby="v-pills-day-2-tab">--}}
{{--                            <div class="row departments">--}}
{{--                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">--}}
{{--                                    <div class="img d-flex align-self-stretch"--}}
{{--                                         style="background-image: url({{asset('images/dept-2.jpg')}});"></div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <h2>Surgical Deparments</h2>--}}
{{--                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where--}}
{{--                                        it--}}
{{--                                        came from it would have been rewritten a thousand times and everything that--}}
{{--                                        was--}}
{{--                                        left from its origin would be the word.</p>--}}
{{--                                    <div class="row mt-5 pt-2">--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-first-aid-kit"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Primary Care</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-dropper"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Lab Test</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-experiment-results"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Symptom Check</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-heart-rate"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Heart Rate</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel"--}}
{{--                             aria-labelledby="v-pills-day-3-tab">--}}
{{--                            <div class="row departments">--}}
{{--                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">--}}
{{--                                    <div class="img d-flex align-self-stretch"--}}
{{--                                         style="background-image: url({{asset('images/dept-3.jpg')}});"></div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <h2>Dental Deparments</h2>--}}
{{--                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where--}}
{{--                                        it--}}
{{--                                        came from it would have been rewritten a thousand times and everything that--}}
{{--                                        was--}}
{{--                                        left from its origin would be the word.</p>--}}
{{--                                    <div class="row mt-5 pt-2">--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-first-aid-kit"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Primary Care</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-dropper"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Lab Test</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-experiment-results"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Symptom Check</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-heart-rate"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Heart Rate</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel"--}}
{{--                             aria-labelledby="v-pills-day-4-tab">--}}
{{--                            <div class="row departments">--}}
{{--                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">--}}
{{--                                    <div class="img d-flex align-self-stretch"--}}
{{--                                         style="background-image: url({{asset('images/dept-4.jpg')}});"></div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <h2>Ophthalmology Deparments</h2>--}}
{{--                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where--}}
{{--                                        it--}}
{{--                                        came from it would have been rewritten a thousand times and everything that--}}
{{--                                        was--}}
{{--                                        left from its origin would be the word.</p>--}}
{{--                                    <div class="row mt-5 pt-2">--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-first-aid-kit"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Primary Care</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-dropper"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Lab Test</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-experiment-results"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Symptom Check</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-heart-rate"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Heart Rate</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="tab-pane fade" id="v-pills-5" role="tabpanel"--}}
{{--                             aria-labelledby="v-pills-day-5-tab">--}}
{{--                            <div class="row departments">--}}
{{--                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">--}}
{{--                                    <div class="img d-flex align-self-stretch"--}}
{{--                                         style="background-image: url({{asset('images/dept-5.jpg')}});"></div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <h2>Cardiology Deparments</h2>--}}
{{--                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where--}}
{{--                                        it--}}
{{--                                        came from it would have been rewritten a thousand times and everything that--}}
{{--                                        was--}}
{{--                                        left from its origin would be the word.</p>--}}
{{--                                    <div class="row mt-5 pt-2">--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-idea"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Primary Care</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-idea"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Lab Test</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-idea"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Symptom Check</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="services-2 d-flex">--}}
{{--                                                <div--}}
{{--                                                    class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">--}}
{{--                                                    <span class="flaticon-idea"></span></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <h3>Heart Rate</h3>--}}
{{--                                                    <p>Far far away, behind the word mountains, far from the--}}
{{--                                                        countries--}}
{{--                                                        Vokalia.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
