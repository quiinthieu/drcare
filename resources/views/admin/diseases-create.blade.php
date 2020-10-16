@extends('layouts.admin', ['pageHeader' => 'Appointments'])
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Create a Disease</h5>
                </div>
                <div class="card-body table-border-style">
                    <form method="POST" action="{{ route('admin-diseases-store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="disease_type_id">Select the Disease Type</label>
                                <div class="input-group">
                                    <select class="custom-select" name="disease_type_id" id="disease_type_id" required>
                                        <option selected disabled>Select the Disease Type...</option>
                                        @foreach(\App\Models\DiseaseType::all() as $diseaseType)
                                            <option value="{{$diseaseType->id}}">{{$diseaseType->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" required class="form-control"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="statistics">Statistics</label>
                                <textarea id="statistics" name="statistics" required class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="causes">Causes</label>
                                <textarea id="causes" name="causes" required class="form-control"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="symptoms">Symptoms</label>
                                <textarea id="symptoms" name="symptoms" required class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="preventions">Preventions</label>
                                <textarea id="preventions" name="preventions" required class="form-control"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
