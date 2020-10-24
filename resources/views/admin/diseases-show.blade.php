@extends('layouts.admin', ['pageHeader' => 'Appointments / Details'])
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Disease Details</h5>
                </div>
                <div class="card-body table-border-style d-flex justify-content-center align-items-center">
                    <div class="col-10">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{$disease->name}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{$disease->description}}</td>
                            </tr>
                            <tr>
                                <th>Statistics</th>
                                <td>{{$disease->statistics}}</td>
                            </tr>
                            <tr>
                                <th>Causes</th>
                                <td>{{$disease->causes}}</td>
                            </tr>
                            <tr>
                                <th>Symptoms</th>
                                <td>{{$disease->symptoms}}</td>
                            </tr>
                            <tr>
                                <th>Preventions</th>
                                <td>{{$disease->preventions}}</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="2">
                                    <div class="d-flex align-items-center justify-content-center mt-3">
                                        <a href="{{route('admin-diseases-index')}}" role="button"
                                           class="btn btn-outline-secondary btn-sm">Back</a>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="{{route('admin-diseases-edit', ['id' => $disease->id])}}" role="button" class="btn btn-outline-primary btn-sm">Edit</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route('admin-diseases-delete', ['id' => $disease->id])}}"
                                           role="button"
                                           class="btn btn-outline-danger btn-sm"
                                           onclick="if(!confirm('Are you sure, you want to delete this ?')){ event.preventDefault();}"
                                           >Delete</a>
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
