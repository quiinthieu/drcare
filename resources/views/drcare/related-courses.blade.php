@extends('layouts.drcare')
@section('content')
    <x-jumbotron title="Related Courses" sub-title="Related Courses"/>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-md-4 ftco-animate d-flex align-items-stretch">
                        <div class="blog-entry shadow d-flex flex-column">
                            <div class="text bg-white p-4">
                                <h3 class="heading"><a href="#">{{$course->name}}</a>
                                </h3>
                                <p>{{$course->description}}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><span class="badge badge-pill badge-primary">{{$course->type}}</span>
                                    <p class="ml-auto mb-0 font-italic">
                                        {{$course->professor}}
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
