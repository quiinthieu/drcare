@extends('layouts.admin', ['pageHeader' => 'Services'])
@section('content')
@include('includes.messages')
    <div class="row">
        <!-- [ stiped-table ] start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Services</h5>
                    <a role="button" href="{{route('admin-services-create')}}" class="btn btn-success btn-sm btn-round has-ripple"><i class="feather icon-plus"></i>Add New Service</a>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">Actions</th>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Type</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td class="text-center">
                                        <a href="{{route('admin-services-edit', $service->id)}}" role="button" class="btn btn-outline-primary btn-sm">Edit</a>
                                        &nbsp;
                                        <a href="{{route('admin-services-delete', $service->id)}}" role="button" class="btn btn-outline-danger btn-sm"
                                            onclick="if(!confirm('Are you sure, you want to delete this ?')){ event.preventDefault();}" 
                                            >Delete</a>
                                    </td>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$service->name}}</td>
                                    <td>
                                        <span
                                            class="badge badge-pill       @if($service->service_type_id ==1)badge-danger 
                                            @elseif($service->service_type_id ==2)badge-primary
                                            @elseif($service->service_type_id ==3)badge-success
                                            @else badge-warning
                                            @endif
                                            ">
                                            {{\Illuminate\Support\Facades\DB::table('service_types')->find($service->service_type_id)->name}}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ stiped-table ] end -->
    </div>
@endsection
