@extends('layouts.drcare')
@section('content')
    <x-jumbotron title="Research" sub-title="Research" />
    <x-research-listing :articles="$articles"/>
@endsection
