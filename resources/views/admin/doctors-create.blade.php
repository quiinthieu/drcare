@extends('layouts.admin', ['pageHeader' => 'Appointments / Create'])
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Create a Doctor</h5>
                </div>
                <div class="card-body table-border-style">
                    <form method="POST" action="{{ route('admin-doctors-store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                       required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="doctor_type_id">Select the Doctor Type</label>
                                <div class="input-group">
                                    <select class="custom-select" name="doctor_type_id" id="doctor_type_id" required>
                                        <option selected disabled>Select the Doctor Type...</option>
                                        @foreach(\App\Models\DoctorType::all() as $doctorType)
                                            <option
                                                value="{{$doctorType->id}}">{{$doctorType->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="photo">Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photo" id="photo">
                                        <label class="custom-file-label" for="photo" aria-describedby="photo" required>Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Create</button>
                        <a class="btn btn-secondary mt-3" href=" {{ route('admin-doctors-index')}}">Back</a>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#photo').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection
