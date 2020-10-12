@extends('layouts.admin', ['pageHeader' => 'Research'])
@section('content')
    <div class="row">
        <div class="col-12 d-flex flex-wrap">
            @foreach($articles as $article)
                <div class="col-3">
                    <div class="card mb-3">
                        <img class="img-fluid card-img-top"
                             src="{{asset($article->thumbnail)}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <div class="d-flex align-items-between justify-content-between">
                                <span class="card-text"><small class="text-muted">{{\Carbon\Carbon::parse(strtotime($article->published_at))->diffForHumans()}}</small></span>
                                <span class="badge badge-pill badge-secondary">{{\Illuminate\Support\Facades\DB::table('disease_types')->find($article->disease_type_id)->name}}</span>
                            </div>

                        </div>
                        <div class="card-footer">
                            <a class="btn btn-outline-primary btn-sm" role="button" href="#">Edit</a>
                            &nbsp;
                            <a class="btn  btn-outline-danger btn-sm" role="button" href="#">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-12 d-flex align-items-center justify-content-center">
            {{$articles->links()}}
        </div>
    </div>
@endsection
