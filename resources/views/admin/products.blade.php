@extends('layouts.admin', ['pageHeader' => 'Products'])
@section('content')
    <div class="row">
        <div class="col-12 d-flex flex-wrap">
            @foreach($products as $product)
                <div class="col-3">
                    <div class="card mb-3">
                        <img class="img-fluid card-img-top"
                             src="{{asset(json_decode($product->photos)[0])}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <span class="badge badge-pill badge-secondary">{{\Illuminate\Support\Facades\DB::table('categories')->find($product->category_id)->name}}</span>
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
            {{$products->links()}}
        </div>
    </div>
@endsection
