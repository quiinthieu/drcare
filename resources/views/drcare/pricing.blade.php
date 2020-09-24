@extends('layouts.drcare')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Pricing</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-departments bg-light">
        <div class="container">
            <div class="row departments p-5 mb-5 bg-white">
                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                    <div class="img d-flex align-self-stretch" style="background-image: url(images/dept-3.jpg);"></div>
                </div>
                <div class="col-md-8">
                    <h2>Dental Deparments</h2>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                        would
                        have been rewritten a thousand times and everything that was left from its origin would be the
                        word.</p>
                    <div class="row mt-5 pt-2">
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-first-aid-kit"></span></div>
                                <div class="text">
                                    <h3>Primary Care</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-dropper"></span></div>
                                <div class="text">
                                    <h3>Lab Test</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-experiment-results"></span></div>
                                <div class="text">
                                    <h3>Symptom Check</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-heart-rate"></span></div>
                                <div class="text">
                                    <h3>Heart Rate</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-5 pb-2">
                <x-pricing-header />
            </div>
            <x-pricing-packages />
        </div>
    </section>
@endsection
