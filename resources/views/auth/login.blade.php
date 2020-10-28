@extends('layouts.auth')
@section('content')
    <form method="POST" action="{{route('login')}}" autocomplete="off">
        @csrf
        <h4 class="mb-3 f-w-400">
            {{__('Login')}}
        </h4>
        <div class="form-group mb-3">
            <label class="floating-label" for="email">
                {{__('E-Mail Address')}}
            </label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('password')}}"  required autocomplete="off" autofocus placeholder="">
            @error('email')
            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label class="floating-label" for="password">
                {{__('Password')}}
            </label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
            @enderror
        </div>

        <div class="custom-control custom-checkbox text-left mb-4 mt-2">
            <input type="checkbox" class="custom-control-input" name="remember" {{old('remember') ? 'checked' : ''}} id="remember">
            <label class="custom-control-label" for="remember">
                {{__('Remember Me')}}
            </label>
        </div>

        <button  type="submit" class="btn btn-block btn-primary mb-4">
            {{__('Login')}}
        </button>

        @if(\Illuminate\Support\Facades\Route::has('register'))
            <p class="mb-0 text-muted">
                Don’t have an account?
                <a href="{{route('register')}}" class="f-w-400">
                    {{__('Register')}}
                </a>
            </p>
        @endif
    </form>
@endsection
