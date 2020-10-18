@extends('layouts.admin', ['pageHeader' => 'Research'])
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit a Research Article</h5>
                </div>
                <div class="card-body table-border-style">
                    <form method="POST" action="{{ route('admin-research-update', $article->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       value="{{$article->title}}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="author">Author</label>
                                <input type="text" name="author" class="form-control" id="author"
                                       value="{{$article->author}}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" name="subtitle" class="form-control" id="subtitle"
                                       value="{{$article->subtitle}}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="published_at">Published At</label>
                                <input type="date" class="form-control" name="published_at" id="published_at"
                                       value="{{\Carbon\Carbon::parse($article->published_at)->format('Y-m-d')}}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="disease_type_id">Select the Disease Type</label>
                                <div class="input-group">
                                    <select class="custom-select" name="disease_type_id" id="disease_type_id" required>
                                        <option disabled>Select the Disease Type...</option>
                                        @foreach(\App\Models\DiseaseType::all() as $diseaseType)
                                            <option
                                                value="{{$diseaseType->id}}" {{$article->disease_type_id === $diseaseType->id ? "selected" : ""}}>{{$diseaseType->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="thumbnail">Thumbnail</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="thumbnail" id="thumbnail">
                                        <label class="custom-file-label" for="thumbnail" aria-describedby="thumbnail"
                                               required>Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label for="content">Content</label>
                                <textarea id="content" name="content" required
                                          class="form-control">{{join('\n', json_decode($article->content))}}</textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#thumbnail').on('change', function () {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection
