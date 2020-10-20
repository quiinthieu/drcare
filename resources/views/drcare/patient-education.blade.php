@extends('layouts.drcare')
@section('content')
    <x-jumbotron title="{{\App\Models\DiseaseType::find($id)->name}}" sub-title="Diseases" />
    <x-disease-listing :id="$id"/>
@endsection
