@extends('layouts.drcare')
@section('content')
    <x-jumbotron title="Services" sub-title="Services" />

    <section class="ftco-section ftco-departments bg-light">
        <div class="container">
            <div class="row departments p-5 mb-5 bg-white">
                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                    <div class="img d-flex align-self-stretch" style="background-image: url(images/dept-3.jpg);"></div>
                </div>
                <div class="col-md-8">
                    <h2>Dental Services</h2>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                        would
                        have been rewritten a thousand times and everything that was left from its origin would be the
                        word.</p>
                    <div class="row mt-5 pt-2">
                        @foreach(\App\Models\ServiceType::all() as $serviceType)
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                            class="flaticon-first-aid-kit"></span></div>
                                    <div class="text">
                                        <h3 style="font-size: medium;">{{$serviceType->name . ' Dentistry'}}</h3>
                                        <p>{{$serviceType->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

{{--                        <div class="col-lg-6">--}}
{{--                            <div class="services-2 d-flex">--}}
{{--                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span--}}
{{--                                        class="flaticon-first-aid-kit"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <h3>Primary Care</h3>--}}
{{--                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="services-2 d-flex">--}}
{{--                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span--}}
{{--                                        class="flaticon-dropper"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <h3>Lab Test</h3>--}}
{{--                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="services-2 d-flex">--}}
{{--                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span--}}
{{--                                        class="flaticon-experiment-results"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <h3>Symptom Check</h3>--}}
{{--                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="services-2 d-flex">--}}
{{--                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span--}}
{{--                                        class="flaticon-heart-rate"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <h3>Heart Rate</h3>--}}
{{--                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-5 pb-2">
                <x-pricing-header/>
            </div>
            <x-pricing-packages/>
        </div>
    </section>
@endsection
