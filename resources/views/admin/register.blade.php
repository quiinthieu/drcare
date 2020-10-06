@extends('layouts.auth')
@section('content')
    <form method="POST" action="{{route('register')}}">
        @csrf
        <img src="../../storage/app/public/admin/images/logo-dark.png" alt="" class="img-fluid mb-4">
        <h4 class="mb-3 f-w-400">{{__('Register')}}</h4>
        <div class="form-group mb-3">
            <label class="floating-label" for="name">{{__('Name')}}</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" required autocomplete="name" autofocus placeholder="">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="floating-label" for="email">{{__('E-Mail Address')}}</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" id="email" placeholder="">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group mb-4">
            <label class="floating-label" for="password">Password</label>
            <input type="password" class="form-control" id="Password" placeholder="">
        </div>
    </form>





    <div class="custom-control custom-checkbox  text-left mb-4 mt-2">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Send me the <a href="#!"> Newsletter</a> weekly.</label>
    </div>
    <button class="btn btn-primary btn-block mb-4">Sign up</button>
    <p class="mb-2">Already have an account? <a href="auth-signin.html" class="f-w-400">Signin</a></p>
@endsection
