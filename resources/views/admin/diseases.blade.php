@extends('layouts.admin', ['pageHeader' => 'Diseases'])
@section('content')
    <div class="row">
        <!-- [ stiped-table ] start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Diseases</h5>
                </div>
                <div class="card-body table-border-style">
                    @if(count($diseases))
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">Actions</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Statistics</th>
                                    <th>Causes</th>
                                    <th>Symptoms</th>
                                    <th>Preventions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($diseases as $disease)
                                    <tr>
                                        <td class="text-center">
                                            <a href="#" role="button" class="btn btn-outline-primary btn-sm">Edit</a>
                                            &nbsp;
                                            <a href="#" role="button" class="btn btn-outline-danger btn-sm">Delete</a>
                                        </td>
                                        <td>{{$disease->id}}</td>
                                        <td>{{$disease->name}}</td>
                                        <td>{{$disease->description}}</td>
                                        <td>{{$disease->statistics}}</td>
                                        <td>{{$disease->causes}}</td>
                                        <td>{{$disease->symptoms}}</td>
                                        <td>{{$disease->preventions}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-secondary" role="alert">
                            <h4 class="alert-heading">No Diseases</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- [ stiped-table ] end -->
    </div>
@endsection
