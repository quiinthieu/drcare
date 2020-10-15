@extends('layouts.admin', ['pageHeader' => 'Appointments'])
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Appointment Details</h5>
                </div>
                <div class="card-body table-border-style d-flex justify-content-center align-items-center">
                    <div class="col-6">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>First Name</th>
                                <td>{{$appointment->first_name}}</td>
                            </tr>
                            <tr>
                                <th>Last Name</th>
                                <td>{{$appointment->last_name}}</td>
                            </tr>
                            <tr>
                                <th>Service Type</th>
                                <td>{{\App\Models\ServiceType::find($appointment->service_type_id)->name}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$appointment->phone}}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{$appointment->date}}</td>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <td>{{$appointment->time}}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{$appointment->message}}</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="2">
                                    <div class="d-flex align-items-center justify-content-center mt-3">
                                        <a href="{{route('admin-appointments-index')}}" role="button"
                                           class="btn btn-outline-secondary btn-sm">Back</a>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="{{route('admin-appointments-edit', ['id' => $appointment->id])}}" role="button" class="btn btn-outline-primary btn-sm">Edit</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route('admin-appointments-delete', ['id' => $appointment->id])}}"
                                           role="button"
                                           class="btn btn-outline-danger btn-sm">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
