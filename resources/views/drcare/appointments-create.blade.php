@extends('layouts.drcare')
@section('content')

    <x-jumbotron title="Appointment" sub-title="Appointment" />
    @include('includes.messages')
    <x-free-consultation-form />
@endsection
