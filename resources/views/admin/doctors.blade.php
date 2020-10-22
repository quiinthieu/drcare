@extends('layouts.admin', ['pageHeader' => 'Doctors'])
@section('content')
@include('includes.messages')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header ">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-sm-4">
                            <h5>Doctors</h5>
                        </div>
                        <div class="col-sm-4 text-center">
                            <form action="{{route('admin-doctors-index')}}" method="get">
                                <div class="input-group">
                                    <select class="custom-select" name="filter">
                                        <option 
                                        @isset($filter)  
                                        {{($filter == 'Select All')? 'selected' : ''}}
                                        @endisset                    
                                        >Select All</option>
                                        @foreach($types as $type)
                                        <option value="{{$type->id}}" 
                                                @isset($filter)  
                                                {{($filter == $type->id)? 'selected' : ''}}
                                                @endisset
                                            >{{$type->name}}</option>                    
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn  btn-info btn-sm btn-round has-ripple" type="submit" >Filter</button>
                                    </div>
                                </div>
                            </form>        
                        </div>
                        <div class="col-sm-4 text-right">
                            <a role="button" href="{{route('admin-doctors-create')}}" class="btn btn-success btn-sm btn-round has-ripple"><i class="feather icon-plus"></i>Add New Doctor</a>
                        </div>
                    </div>
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
                    @if(isset($filter))         
                    {{$doctors->appends(array('filter' => $filter))->links()}}
                    @else
                    {{$doctors->links()}}
                    @endif
                   
                </div>
            </div>
        </div>
    </div>

   
@endsection
