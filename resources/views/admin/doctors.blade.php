@extends('layouts.admin', ['pageHeader' => 'Doctors'])
@section('content')
@include('includes.messages')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Doctors</h5>
                    <a role="button" href="{{route('admin-doctors-create')}}" class="btn btn-success btn-sm btn-round has-ripple"><i class="feather icon-plus"></i>Add New Doctor</a>
                </div>
                <div class="card-body table-border-style">
                    <div class="col-12 d-flex flex-wrap">
                        @foreach($doctors as $doctor)
                            <div class="col-3">
                                <div class="card mb-3">
                                    <img class="img-fluid card-img-top"
                                         src="{{asset($doctor->photo)}}"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$doctor->name}}</h5>
                                        <p class="card-text"><span class="badge 
                                            @if($doctor->doctor_type_id ==1)badge-primary 
                                            @elseif($doctor->doctor_type_id ==2)badge-secondary
                                            @elseif($doctor->doctor_type_id ==3)badge-success
                                            @elseif($doctor->doctor_type_id ==4)badge-danger
                                            @elseif($doctor->doctor_type_id ==5)badge-warning
                                            @elseif($doctor->doctor_type_id ==6)badge-info
                                            @else badge-dark
                                            @endif
                                            ">{{\Illuminate\Support\Facades\DB::table('doctor_types')->find($doctor->doctor_type_id)->name}}</span></p>
                                        <a class="btn btn-outline-primary btn-sm" role="button" href="{{route('admin-doctors-edit', ['id' => $doctor->id])}}">Edit</a>
                                        &nbsp;
                                        <a class="btn  btn-outline-danger btn-sm" role="button" href="{{route('admin-doctors-delete', ['id' => $doctor->id])}}"
                                            onclick="if(!confirm('Are you sure, you want to delete this ?')){ event.preventDefault();}"  
                                            >Delete</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{$doctors->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
