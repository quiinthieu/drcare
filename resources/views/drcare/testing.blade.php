@extends('layouts.drcare')
@section('content')
    <x-jumbotron title="Products" sub-title="Products" />
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach(\App\Models\Product::all() as $product)
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry shadow d-flex flex-column">
                            <div id="{{'carousel' . $product->id}}" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="{{'#carousel' . $product->id}}" data-slide-to="0" class="active text-dark" style="background-color: rgba(0, 0, 0, 0.5);"></li>
                                    <li data-target="{{ '#carousel' . $product->id}}" data-slide-to="1" style="background-color: rgba(0, 0, 0, 0.5);"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{json_decode($product->photos)[0]}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{json_decode($product->photos)[1]}}" alt="Second slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="{{'#carousel' . $product->id}}" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert();"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="{{'#carousel' . $product->id}}" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert();"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="text bg-white p-4">
                                <h3 class="heading"><a href="#">{{$product->name}}</a></h3>
                                <p>{{$product->description}}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary">Add to Cart <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0 lead">
                                        <span class="mr-2">${{number_format($product->price, 2)}}</span>
                                        {{--                                    <span class="meta-chat">{{$product->price}}</span>--}}
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
