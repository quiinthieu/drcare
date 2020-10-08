@extends('layouts.drcare')
@section('content')
    <x-jumbotron title="Confirmation" sub-title="Confirmation"/>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter"
             style="background-image: url(storage/drcare/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5 pr-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <span class="subheading">Confirmation</span>
                        <h2 class="mb-4">Appointment Confirmation</h2>
                        <p>Thank you for choosing us!</p>
                    </div>
                    <div class="appointment-form ftco-animate">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First name: {{$appointment->first_name}}"
                                       readonly>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Last name: {{$appointment->last_name}}"
                                       readonly>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Service: {{\Illuminate\Support\Facades\DB::table('service_types')->find($appointment->service_type_id)->name}}"
                                       readonly>
                            </div>
                            <div class="form-group ml-md-4">
                                <input required name="phone" type="tel" class="form-control" placeholder="Phone: {{$appointment->phone}}">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Date: {{date_format($appointment->date, 'd/m/Y')}}"
                                       readonly>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Time: {{date_format($appointment->time, 'h:i A')}}"
                                       readonly>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <a type="button" href="{{route('appointments.create')}}" class="btn btn-secondary py-3 px-4">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-5 bg-counter aside-stretch">
                    <h3 class="vr">About Dr.Care Facts</h3>
                    <div class="row pt-4 mt-1">
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="30">0</strong>
                                    <span>Years of Experienced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="4500">0</strong>
                                    <span>Happy Patients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="84">0</strong>
                                    <span>Number of Doctors</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="300">0</strong>
                                    <span>Number of Staffs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
