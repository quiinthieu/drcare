@extends('layouts.drcare')
@section('content')
    <x-jumbotron title="Products" sub-title="Products" />
    <x-products-listing :id="$id"/>
@endsection
