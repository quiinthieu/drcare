@extends('layouts.admin', ['pageHeader' => 'Disease Edit'])
@section('content')
    <x-disease-edit-form :id="$id" />
@endsection
