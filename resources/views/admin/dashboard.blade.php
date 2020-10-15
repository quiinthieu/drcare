@extends('layouts.admin', ['pageHeader' => 'Dashboard'])
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <x-total-diseases />
                <x-total-services />
                <x-total-doctors />
                <x-total-appointments />
                <x-total-products />
                <x-total-research />
            </div>
        </div>
    </div>
@endsection
