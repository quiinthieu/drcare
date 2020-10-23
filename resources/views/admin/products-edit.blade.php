@extends('layouts.admin', ['pageHeader' => 'Products / Edit'])
@section('content')
@include('includes.messages')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header 
                d-flex align-items-center justify-content-between">
                    <h5>Edit a Product</h5>
                    <div class="form-group">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="switch-p-1" checked="" >
                            <label for="switch-p-1" class="cr"></label>
                        </div>
                        <label class="badge badge-pill badge-primary">Active</label>    
                    </div>
                </div>
                <div class="card-body table-border-style">
                    <form method="POST" action="{{ route('admin-products-update', $product->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$product->name}}"
                                       required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="category_id">Select a Category</label>
                                <div class="input-group">
                                    <select class="custom-select" name="category_id" id="category_id" required>
                                        <option disabled>Select a Category...</option>
                                        @foreach(\App\Models\Category::all() as $category)
                                            <option
                                                value="{{$category->id}}" {{$product->category_id === $category->id ? "selected" : ""}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="price">Price</label>
                                <input type="number" min="0" step="0.01" name="price" class="form-control" id="price" value="{{number_format($product->price, 2)}}"
                                       required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="photos">Photo(s)</label>
                                <div class="form-control">
                                    <input type="file" name="photos[]" id="photos" multiple>
                                </div>
                              {{--   <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photos[]" id="photos" multiple>
                                        <label class="custom-file-label" for="photos" aria-describedby="photos">Choose file</label>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" required class="form-control">{{$product->description}}</textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Update</button>
                        <a class="btn btn-secondary mt-3" href=" {{ route('admin-products-index')}}">Back</a>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#photos').on('change',function(){
            let numOfPhotos = $(this)[0].files.length;
            $(this).next('.custom-file-label').html(numOfPhotos + ' file(s) selected');
        })
    </script>
@endsection
