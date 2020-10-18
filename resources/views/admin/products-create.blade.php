@extends('layouts.admin', ['pageHeader' => 'Products'])
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Create a Product</h5>
                </div>
                <div class="card-body table-border-style">
                    <form method="POST" action="{{ route('admin-products-store')}}"
                          enctype="multipart/form-data">
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
                                        <option selected disabled>Select a Category...</option>
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
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photos[]" id="photos"
                                               multiple>
                                        <label class="custom-file-label" for="photos" aria-describedby="photos">Choose
                                            file</label>
                                    </div>
                                </div>
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
