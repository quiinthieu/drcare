@extends('layouts.admin', ['pageHeader' => 'Products / Create'])
@section('content')
@include('includes.messages')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <form method="POST" action="{{ route('admin-products-store')}}"
                          enctype="multipart/form-data">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Create a Product</h5>
                    <div class="form-group">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="switch-p-1"  name="status" checked>
                            <label for="switch-p-1" class="cr"></label>
                        </div>
                        <label class="badge badge-pill badge-primary" id="status">Active</label>    
                    </div>

                </div>
                <div class="card-body table-border-style">
                    {{-- <form method="POST" action="{{ route('admin-products-store')}}"
                          enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                       required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="category_id">Select a Category</label>
                                <div class="input-group">
                                    <select class="custom-select" name="category_id" id="category_id" required>
                                        <option selected disabled value="">Select a Category...</option>
                                        @foreach(\App\Models\Category::all() as $category)
                                            <option
                                                value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="price">Price</label>
                                <input type="number" min="0" step="0.01" name="price" class="form-control" id="price"
                                       required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="photos">Photo(s)</label>
                                <div class="form-control">
                                    <input type="file" name="photos[]" id="photos"
                                    multiple>
                                </div>
                              {{--   <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photos[]" id="photos"
                                               multiple>
                                        <label class="custom-file-label" for="photos" aria-describedby="photos">Choose
                                            file</label>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" required
                                          class="form-control"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Create</button>
                        <a class="btn btn-secondary mt-3" href=" {{ route('admin-products-index')}}">Back</a>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('drcare/js/jquery.min.js')}}"></script>
    <script>
        $('#photos').on('change', function () {
            // var fileNames = $(this).files;
            let numOfPhotos = $(this)[0].files.length;
            $(this).next('.custom-file-label').html(numOfPhotos + ' file(s) selected');
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
