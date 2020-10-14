@extends('layouts.admin', ['pageHeader' => 'Services'])
@section('content')
    <div class="row">
        <!-- [ stiped-table ] start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Services</h5>
                    <a role="button" class="btn btn-primary text-white">Create</a>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">Actions</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td class="text-center">
                                        <a href="#" role="button" class="btn btn-outline-primary btn-sm">Edit</a>
                                        &nbsp;
                                        <a href="#" role="button" class="btn btn-outline-danger btn-sm">Delete</a>
                                    </td>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->name}}</td>
                                    <td>
                                        <span
                                            class="badge badge-pill badge-secondary">
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
