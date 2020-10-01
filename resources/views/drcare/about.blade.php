@extends('layouts.drcare')
@section('content')
    <x-jumbotron title="About Us" sub-title="About Us" />
    <x-about-dr-care/>
    <x-free-consultation-banner/>

    <x-testimonials/>
    <x-our-qualified-doctors />
{{--    <x-free-consultation-form/>--}}
@endsection
