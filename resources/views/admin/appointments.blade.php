@extends('layouts.admin', ['pageHeader' => 'Appointments'])
@section('content')
@include('includes.messages')
    <div class="row">
        <!-- [ stiped-table ] start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Appointments</h5>
                    <a role="button" class="btn btn-success btn-sm btn-round has-ripple" href="{{route('admin-appointments-create')}}"><i class="feather icon-plus"></i>Add New Appointment</a>
                </div>
                <div class="card-body table-border-style">
                    @if(count($appointments))
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">Actions</th>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Service Type</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{route('admin-appointments-show', ['id' => $appointment->id])}}" role="button" class="btn btn-outline-secondary btn-sm">Show</a>
                                            &nbsp;
                                            <a href="{{route('admin-appointments-edit', ['id' => $appointment->id])}}" role="button" class="btn btn-outline-primary btn-sm">Edit</a>
                                            &nbsp;
                                            <a 
                                            href="{{route('admin-appointments-delete', ['id' => $appointment->id])}}"
                                             role="button" 
                                             class="btn btn-outline-danger btn-sm"
                                        onclick="if(confirm('Are you sure, you want to delete this ?')){ event.preventDefault();}else{
                                            event.preventDefault();
                                        }"
                                             >Delete</a>
                                        </td>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$appointment->first_name . ' ' . $appointment->last_name}}</td>
                                        <td>{{\Illuminate\Support\Facades\DB::table('service_types')->find($appointment->service_type_id)->name}}</td>
                                        <td>{{$appointment->date}}</td>
                                        <td>{{$appointment->time}}</td>
                                        <td>{{$appointment->message}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-secondary" role="alert">
                            <h4 class="alert-heading text-center">No Appointments</h4>
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <!-- [ stiped-table ] end -->
    </div>
@endsection
