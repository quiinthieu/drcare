@extends('layouts.admin', ['pageHeader' => 'Research'])
@section('content')
@include('includes.messages')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header ">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-sm-3">
                            <h5>Research</h5>
                        </div>
                        <div class="col-sm-6 text-center">
                            <form action="{{route('admin-research-index')}}" method="get" class="">
                                <div class="input-group d-flex align-items-end justify-content-between">
                                    <div >
                                        <label for="type" class="badge badge-pill badge-primary">Type</label>
                                        <select class="custom-select" name="filter">
                                            <option value="all"
                                            @isset($filter)
                                            {{($filter == 'all')? 'selected' : ''}}
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
                                    </div>

                                    <div >
                                        <label for="status" class="badge badge-pill badge-warning">Status</label>
                                        <select class="custom-select" name="status">
                                            <option value="1"
                                            @isset($status)
                                            {{($status == 1)? 'selected' : ''}}
                                            @endisset
                                            >Active</option>
                                            <option value="0"
                                            @isset($status)
                                            {{($status == 0)? 'selected' : ''}}
                                            @endisset
                                            >Inactive</option>
                                         </select>
                                    </div>
                                    <button class="btn  btn-info  btn-round has-ripple" type="submit" >Filter</button>
                                    <a class="btn  btn-danger  btn-round has-ripple ml-3" href="{{route('admin-research-index')}}" >Clear</a>
                                </div>

                            </form>
                        </div>
                        <div class="col-sm-3 text-right">
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
                                    <div class="card-footer d-flex align-items-stretch justify-content-between">
                                        <div class="d-flex align-items-center ">
                                            <a href="{{route('admin-research-edit', ['id' => $article->id])}}"
                                               class="nav-link ">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-edit"></i>
                                                </span>
                                            </a>
                                            <a href="{{route('admin-research-delete', ['id' => $article->id])}}"
                                               class="nav-link ">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-trash text-danger"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-end ">
                                            <label class="badge badge-pill {{($article->status) ? 'badge-primary':'badge-danger'}}">
                                                {{($article->status) ? 'Active':'Inactive'}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if(isset($status))
                   {{ $articles->withQueryString()->links() }}
                    @else
                    {{$articles->links()}}
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
