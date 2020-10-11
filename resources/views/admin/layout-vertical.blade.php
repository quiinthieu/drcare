@extends('layouts.admin-layout')
@section('content')
    <div class="row">
        <!-- [ static-layout ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Static Layout</h5>
                </div>
                <div class="card-body">
                    <p>In Static Layout - Header & Sidebar is not fixed while scrolling the page.</p>
                    <div class="alert alert-info mb-0" role="alert">
                        <p class="mb-0">It is best suited for those applications where you don't need sidebar & header to be fixed while scrolling the page.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ static-layout ] end -->
    </div>
@endsection
