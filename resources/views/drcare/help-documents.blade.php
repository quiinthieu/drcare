@extends('layouts.drcare')
@section('content')
    <x-jumbotron title="Help Documents" sub-title="Help Documents" />
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($documents as $document)
                    <div class="col-md-4 ftco-animate d-flex align-items-stretch">
                        <div class="blog-entry shadow d-flex flex-column">
                            <div class="text bg-white p-4">
                                <h3 class="heading"><a href="#">{{$document->title}}</a>
                                </h3>
                                <p>{{$document->subtitle}}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><span class="badge badge-pill badge-primary">{{$document->type}}</span>
                                    <p class="ml-auto mb-0 font-italic">
                                        {{$document->author}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
