@extends('layouts.admin', ['pageHeader' => 'Doctors'])
@section('content')
    <div class="row">
        <div class="col-12 d-flex flex-wrap">
            @foreach($doctors as $doctor)
                <div class="col-3">
                    <div class="card mb-3">
                        <img class="img-fluid card-img-top"
                             src="{{asset($doctor->photo)}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$doctor->name}}</h5>
                            <p class="card-text"><span class="badge badge-secondary">{{\Illuminate\Support\Facades\DB::table('doctor_types')->find($doctor->doctor_type_id)->name}}</span></p>
                            <a class="btn btn-outline-primary btn-sm" role="button" href="#">Edit</a>
                            &nbsp;
                            <a class="btn  btn-outline-danger btn-sm" role="button" href="#">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-12 d-flex align-items-center justify-content-center">
            {{$doctors->links()}}
        </div>
    </div>
@endsection
