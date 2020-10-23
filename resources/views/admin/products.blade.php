@extends('layouts.admin', ['pageHeader' => 'Products'])
@section('content')
@include('includes.messages')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header ">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-sm-4">
                            <h5>Products</h5>
                        </div>
                        <div class="col-sm-4 text-center">
                            <form action="{{route('admin-products-index')}}" method="get">
                                <div class="input-group">
                                    <select class="custom-select" name="filter">
                                        <option 
                                        @isset($filter)  
                                        {{($filter == 'Select All')? 'selected' : ''}}
                                        @endisset                    
                                        >Select All</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" 
                                                @isset($filter)  
                                                {{($filter == $category->id)? 'selected' : ''}}
                                                @endisset
                                            >{{$category->name}}</option>                    
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn  btn-info btn-sm btn-round has-ripple" type="submit" >Filter</button>
                                    </div>
                                </div>
                            </form>        
                        </div>
                        <div class="col-sm-4 text-right">
                            <a role="button" class="btn btn-success btn-sm btn-round has-ripple" href="{{route('admin-products-create')}}"><i class="feather icon-plus"></i>Add New Product</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-border-style">
                    <div class="col-12 d-flex flex-wrap">
                        @foreach($products as $product)
                            <div class="col-3">
                                <div class="card mb-3">
                                    <div id="{{'carousel' . $product->id}}" class="carousel slide" data-ride="carousel"
                                         data-interval="false">
                                        <ol class="carousel-indicators">
                                            @foreach(json_decode($product->photos) as $key => $val)
                                                <li data-target="{{'#carousel' . $product->id}}"
                                                    data-slide-to="{{$key}}"
                                                    class="{{$key === 0 ? "active" : ""}} text-dark"
                                                    style="background-color: rgba(0, 0, 0, 0.5);"></li>
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach(json_decode($product->photos) as $key => $val)
                                                <div class="carousel-item {{$key === 0 ? "active" : ""}}">
                                                    <img class="d-block w-100"
                                                         src="{{asset($val)}}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="{{'#carousel' . $product->id}}"
                                           role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"
                                                  style="filter: invert();"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="{{'#carousel' . $product->id}}"
                                           role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"
                                                  style="filter: invert();"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->name}}</h5>
                                        <p class="card-text">{{$product->description}}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span
                                                class="badge       @if($product->category_id ==1)badge-danger 
                                                @elseif($product->category_id ==2)badge-primary
                                                @elseif($product->category_id ==3)badge-info
                                                @else badge-warning
                                                @endif
                                                ">{{\Illuminate\Support\Facades\DB::table('categories')->find($product->category_id)->name}}</span>
                                            <span class="font-weight-bold lead">${{number_format($product->price, 2)}}</span>
                                        </div>

                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="form-group">
                                            <a class="btn btn-outline-primary btn-sm" role="button"
                                            href="{{route('admin-products-edit', ['id' => $product->id])}}">Edit</a>
                                         &nbsp;
                                         <a class="btn btn-outline-danger btn-sm" role="button"
                                            href="{{route('admin-products-delete', ['id' => $product->id])}}"
                                            onclick="if(!confirm('Are you sure, you want to delete this ?')){ event.preventDefault();}"
                                            >Delete</a>
                                        </div>

                                        <div class="form-group">
                                            <div class="switch switch-primary d-inline m-r-10">
                                                <input type="checkbox" checked="" >
                                                <label for="switch-p-1" class="cr"></label>
                                            </div>
                                            <label class="badge badge-pill badge-primary">Active</label>    
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if(isset($filter))         
                    {{$products->appends(array('filter' => $filter))->links()}}
                    @else
                    {{$products->links()}}
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
@endsection
