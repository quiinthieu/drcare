@extends('layouts.auth')
@section('content')
    <img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
    <h4 class="mb-3 f-w-400">Signin</h4>
    <div class="form-group mb-3">
        <label class="floating-label" for="Email">Email address</label>
        <input type="text" class="form-control" id="Email" placeholder="">
    </div>
    <div class="form-group mb-4">
        <label class="floating-label" for="Password">Password</label>
        <input type="password" class="form-control" id="Password" placeholder="">
    </div>
    <div class="custom-control custom-checkbox text-left mb-4 mt-2">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Save credentials.</label>
    </div>
    <button class="btn btn-block btn-primary mb-4">Signin</button>
    <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
    <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p>
@endsection
