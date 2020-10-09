@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- [ badge ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Basic Badges</h5>
                </div>
                <div class="card-body">
                    <h1>Example heading <span class="badge badge-secondary">New</span></h1>
                    <h2>Example heading <span class="badge badge-secondary">New</span></h2>
                    <h3>Example heading <span class="badge badge-secondary">New</span></h3>
                    <h4>Example heading <span class="badge badge-secondary">New</span></h4>
                    <h5>Example heading <span class="badge badge-secondary">New</span></h5>
                    <h6>Example heading <span class="badge badge-secondary">New</span></h6>
                </div>
            </div>
            <div class="card btn-page">
                <div class="card-header">
                    <h5>Button Badges</h5>
                </div>
                <div class="card-body">
                    <button type="button" class="btn  btn-primary">primary <span class="badge badge-light">4</span></button>
                    <button type="button" class="btn  btn-secondary">secondary <span class="badge badge-light">4</span></button>
                    <button type="button" class="btn  btn-success">success <span class="badge badge-light">4</span></button>
                    <button type="button" class="btn  btn-danger">danger <span class="badge badge-light">4</span></button>
                    <button type="button" class="btn  btn-warning">warning <span class="badge badge-light">4</span></button>
                    <button type="button" class="btn  btn-info">info <span class="badge badge-light">4</span></button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Contextual Variations</h5>
                </div>
                <div class="card-body">
                    <span class="badge badge-primary">Primary</span>
                    <span class="badge badge-secondary">Secondary</span>
                    <span class="badge badge-success">Success</span>
                    <span class="badge badge-danger">Danger</span>
                    <span class="badge badge-warning">Warning</span>
                    <span class="badge badge-info">Info</span>
                    <span class="badge badge-light">Light</span>
                    <span class="badge badge-dark">Dark</span>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Pill Badges</h5>
                </div>
                <div class="card-body">
                    <span class="badge badge-pill badge-primary">Primary</span>
                    <span class="badge badge-pill badge-secondary">Secondary</span>
                    <span class="badge badge-pill badge-success">Success</span>
                    <span class="badge badge-pill badge-danger">Danger</span>
                    <span class="badge badge-pill badge-warning">Warning</span>
                    <span class="badge badge-pill badge-info">Info</span>
                    <span class="badge badge-pill badge-light">Light</span>
                    <span class="badge badge-pill badge-dark">Dark</span>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Links</h5>
                </div>
                <div class="card-body">
                    <a href="#!" class="badge badge-primary">Primary</a>
                    <a href="#!" class="badge badge-secondary">Secondary</a>
                    <a href="#!" class="badge badge-success">Success</a>
                    <a href="#!" class="badge badge-danger">Danger</a>
                    <a href="#!" class="badge badge-warning">Warning</a>
                    <a href="#!" class="badge badge-info">Info</a>
                    <a href="#!" class="badge badge-light">Light</a>
                    <a href="#!" class="badge badge-dark">Dark</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Light variant</h5>
                </div>
                <div class="card-body">
                    <span class="badge badge-light-primary">Primary</span>
                    <span class="badge badge-light-secondary">Secondary</span>
                    <span class="badge badge-light-success">Success</span>
                    <span class="badge badge-light-danger">Danger</span>
                    <span class="badge badge-light-warning">Warning</span>
                    <span class="badge badge-light-info">Info</span>
                    <span class="badge badge-light-light">Light</span>
                    <span class="badge badge-light-dark">Dark</span>
                </div>
            </div>
        </div>
        <!-- [ badge ] end -->
    </div>
@endsection
