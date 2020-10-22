@extends('layouts.admin', ['pageHeader' => 'Appointments / Create'])
@section('content')
@include('includes.messages')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Create an Appointment</h5>
                </div>
                <div class="card-body table-border-style">
                    <form method="POST" action="{{ route('admin-appointments-store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">First name</label>
                                <input type="text" name="first_name" class="form-control" id="validationCustom01" placeholder="First name" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Last name</label>
                                <input type="text" name="last_name" class="form-control" id="validationCustom02" placeholder="Last name" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="service">Select Your Service</label>
                                <div class="input-group">
                                    <select class="custom-select" name="service_type_id" id="service" required>
                                        <option selected disabled value="">Select the Service...</option>
                                        @foreach(\App\Models\ServiceType::all() as $serviceType)
                                            <option value="{{$serviceType->id}}">{{$serviceType->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Phone</label>
                                <input type="tel" class="form-control" name="phone" id="validationCustom03" placeholder="Phone" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Date</label>
                                <input type="date" class="form-control" name="date" id="validationCustom04" placeholder="Date" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Time</label>
                                <input type="time" class="form-control" name="time" id="validationCustom05" placeholder="Time" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" required class="form-control"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Create</button>
                        <a class="btn btn-secondary mt-3" href=" {{ route('admin-appointments-index')}}">Back</a>   
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
