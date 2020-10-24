@extends('layouts.admin', ['pageHeader' => 'Services / Create'])
@section('content')
@include('includes.messages')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Create a Service</h5>
                </div>
                <div class="card-body table-border-style">
                    <form method="POST" action="{{ route('admin-services-store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="service_type_id">Select a Service Type</label>
                                <div class="input-group">
                                    <select class="custom-select" name="service_type_id" id="service_type_id" required>
                                        <option selected disabled value="">Select a Category...</option>
                                        @foreach(\App\Models\ServiceType::all() as $serviceType)
                                            <option
                                                value="{{$serviceType->id}}">{{$serviceType->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Create</button>
                        <a class="btn btn-secondary mt-3" href=" {{ route('admin-services-index')}}">Back</a>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#photos').on('change', function () {
            // var fileNames = $(this).files;
            let numOfPhotos = $(this)[0].files.length;
            $(this).next('.custom-file-label').html(numOfPhotos + ' file(s) selected');
        })
    </script>
@endsection
