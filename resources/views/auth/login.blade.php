@extends('layouts.auth')
@section('content')
    <form method="POST" action="{{route('login')}}">
        @csrf
        <img src="{{asset('storage/admin/images/logo-dark.png')}}" alt="" class="img-fluid mb-4">
        <h4 class="mb-3 f-w-400">
            {{__('Login')}}
        </h4>
        <div class="form-group mb-3">
            <label class="floating-label" for="email">
                {{__('E-Mail Address')}}
            </label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" required autocomplete="email" autofocus placeholder="">
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
        @if (\Illuminate\Support\Facades\Route::has('password.request'))
            <p class="mb-2 text-muted">Forgot password?
                <a href="{{route('password.request')}}" class="f-w-400">
                    {{__('Forgot Your Password?')}}
                </a>
            </p>
        @endif

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






{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </form>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
