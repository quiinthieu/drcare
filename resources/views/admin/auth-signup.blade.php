@extends('layouts.auth')
@section('content')
    <img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
    <h4 class="mb-3 f-w-400">Sign up</h4>
    <div class="form-group mb-3">
        <label class="floating-label" for="Username">Username</label>
        <input type="text" class="form-control" id="Username" placeholder="">
    </div>
    <div class="form-group mb-3">
        <label class="floating-label" for="Email">Email address</label>
        <input type="text" class="form-control" id="Email" placeholder="">
    </div>
    <div class="form-group mb-4">
        <label class="floating-label" for="Password">Password</label>
        <input type="password" class="form-control" id="Password" placeholder="">
    </div>
    <div class="custom-control custom-checkbox  text-left mb-4 mt-2">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Send me the <a href="#!"> Newsletter</a> weekly.</label>
    </div>
    <button class="btn btn-primary btn-block mb-4">Sign up</button>
    <p class="mb-2">Already have an account? <a href="auth-signin.html" class="f-w-400">Signin</a></p>
@endsection
