@extends('layouts.admin', ['pageHeader' => 'Research / Create'])
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Create a Research Article</h5>
                </div>
                <div class="card-body table-border-style">
                    <form method="POST" action="{{ route('admin-research-store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="author">Author</label>
                                <input type="text" name="author" class="form-control" id="author" placeholder="Author" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Subtitle" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="published_at">Published At</label>
                                <input type="date" class="form-control" name="published_at" id="published_at" placeholder="Published At" required>
                            </div>
                            <div class="col-md-4 mb-3">
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
                            <div class="col-md-4 mb-3">
                                <label for="thumbnail">Thumbnail</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="thumbnail" id="thumbnail">
                                        <label class="custom-file-label" for="thumbnail" aria-describedby="thumbnail" required>Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label for="content">Content</label>
                                <textarea id="content" name="content" required class="form-control"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Create</button>
                        <a class="btn btn-secondary mt-3" href=" {{ route('admin-research-index')}}">Back</a>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#thumbnail').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection
