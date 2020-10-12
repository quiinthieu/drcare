@extends('layouts.admin', ['pageHeader' => 'Doctors'])
@section('content')
    <div class="row">
        <div class="col-12 d-flex flex-wrap">
            @foreach($doctors as $doctor)
                <div class="col-4">
                    <div class="card mb-3">
                        <img class="img-fluid card-img-top"
                             src="{{asset($doctor->photo)}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$doctor->name}}</h5>
                            <p class="card-text">{{\Illuminate\Support\Facades\DB::table('doctor_types')->find($doctor->doctor_type_id)->name}}</p>
                            <p class="card-text"><small class="text-muted"></small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
