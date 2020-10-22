@extends('layouts.admin', ['pageHeader' => 'Research'])
@section('content')
@include('includes.messages')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header ">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-sm-4">
                            <h5>Research</h5>
                        </div>
                        <div class="col-sm-4 text-center">
                            <form action="{{route('admin-research-index')}}" method="get">
                                <div class="input-group">
                                    <select class="custom-select" name="filter">
                                        <option 
                                        @isset($filter)  
                                        {{($filter == 'Select All')? 'selected' : ''}}
                                        @endisset                    
                                        >Select All</option>
                                        @foreach($types as $type)
                                        <option value="{{$type->id}}" 
                                                @isset($filter)  
                                                {{($filter == $type->id)? 'selected' : ''}}
                                                @endisset
                                            >{{$type->name}}</option>                    
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn  btn-info btn-sm btn-round has-ripple" type="submit" >Filter</button>
                                    </div>
                                </div>
                            </form>        
                        </div>
                        <div class="col-sm-4 text-right">
                            <a role="button" href="{{route('admin-research-create')}}"
                            class="btn btn-success btn-sm btn-round has-ripple"><i class="feather icon-plus"></i>Add New Research</a>
                        </div>
                    </div>   
                </div>
                <div class="card-body table-border-style">
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
                                            <span class="card-text"><small
                                                    class="text-muted">{{\Carbon\Carbon::parse(strtotime($article->published_at))->diffForHumans()}}</small></span>
                                            <span
                                                class="badge 
                                                @if($article->disease_type_id ==1)badge-info         
                                                @else badge-primary
                                                @endif         
                                                ">{{\Illuminate\Support\Facades\DB::table('disease_types')->find($article->disease_type_id)->name}}</span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-outline-primary btn-sm" role="button"
                                           href="{{route('admin-research-edit', $article->id)}}">Edit</a>
                                        &nbsp;
                                        <a class="btn  btn-outline-danger btn-sm" role="button"
                                           href="{{route('admin-research-delete', $article->id)}}"
                                           onclick="if(!confirm('Are you sure, you want to delete this ?')){ event.preventDefault();}"
                                           >Delete</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if(isset($filter))         
                    {{$articles->appends(array('filter' => $filter))->links()}}
                    @else
                    {{$articles->links()}}
                    @endif
                 
                </div>
            </div>
        </div>
    </div>
@endsection
