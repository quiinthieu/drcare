@extends('layouts.admin', ['pageHeader' => 'Appointments / Edit'])
@section('content')
@include('includes.messages')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <form method="POST" action="{{ route('admin-doctors-update', $doctor->id)}}" enctype="multipart/form-data">
                <div class="card-header 
                d-flex align-items-center justify-content-between">
                    <h5>Edit a Doctor</h5>
                    <div class="form-group">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="switch-p-1" {{($doctor->status) ? 'checked':''}} name="status">
                            <label for="switch-p-1" class="cr"></label>
                        </div>
                        <label class="badge badge-pill 
                        {{($doctor->status) ? 'badge-primary':'badge-danger'}}
                        " id="status">{{
                            ($doctor->status) ? 'Active':'Inactive'
                            }}</label>    
                    </div>

                </div>
                <div class="card-body table-border-style">
                    {{-- <form method="POST" action="{{ route('admin-doctors-update', $doctor->id)}}" enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$doctor->name}}"
                                       required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="doctor_type_id">Select the Doctor Type</label>
                                <div class="input-group">
                                    <select class="custom-select" name="doctor_type_id" id="doctor_type_id" required>
                                        <option disabled>Select the Doctor Type...</option>
                                        @foreach(\App\Models\DoctorType::all() as $doctorType)
                                            <option
                                                value="{{$doctorType->id}}" {{$doctor->doctor_type_id === $doctorType->id ? "selected" : ""}}>{{$doctorType->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="photo">Photo</label>
                                <div class="input-group">
                                    <div class="form-control">
                                        <input type="file" name="photo" id="photo">
                                    </div>
                                    {{-- <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photo" id="photo">
                                        <label class="custom-file-label" for="photo" aria-describedby="photo">Choose file</label>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Update</button>
                        <a class="btn btn-secondary mt-3" href=" {{ route('admin-doctors-index')}}">Back</a>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('drcare/js/jquery.min.js')}}"></script>
    <script>
        $('#photo').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
        $( document ).ready(function() { 
            $('#switch-p-1').change(function() {
                    // use the :checked selector to find any that are checked
                    if ($('#switch-p-1:checked').length > 0) {
                        $('#status').html('Active')
                        $('#status').removeClass("badge-danger");
                        $('#status').addClass("badge-primary");
                    } else {
                        $('#status').html('Inactive')
                        $('#status').removeClass("badge-primary");
                        $('#status').addClass("badge-danger");
                    }
                });
        });

    </script>
@endsection
