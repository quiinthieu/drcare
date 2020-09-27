<!-- Very little is needed to make a happy life. - Marcus Antoninus -->
<!-- Order your soul. Reduce your wants. - Augustine -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Diseases</span>
                <h2 class="mb-4">{{\App\Models\DiseaseType::find($id)->name}}</h2>
                <p>{{\App\Models\DiseaseType::find($id)->description}}</p>
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
                                        <h2>{{$disease['name']}}</h2>
                                        <p>{{$disease['description']}}</p>
                                        <div class="row mt-5 pt-2">
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-first-aid-kit"></span></div>
                                                    <div class="text">
                                                        <h3>Statistics</h3>
                                                        <p>{{$disease['statistics']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-dropper"></span></div>
                                                    <div class="text">
                                                        <h3>Causes</h3>
                                                        <p>{{$disease['causes']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-experiment-results"></span></div>
                                                    <div class="text">
                                                        <h3>Symptoms</h3>
                                                        <p>{{$disease['symptoms']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-heart-rate"></span></div>
                                                    <div class="text">
                                                        <h3>Preventions</h3>
                                                        <p>{{$disease['preventions']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
