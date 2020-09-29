@extends('layouts.drcare')
@section('content')
    <x-jumbotron-research-single />
    <x-research-article :id="$id" />
@endsection

