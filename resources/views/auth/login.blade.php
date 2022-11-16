@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 80vh">
    <div class="py-5"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <img src="{{ asset('images/pics/smart-logo.png') }}" alt="PCEE LOGO" class="img-fluid mb-3">
                <h2 class="mb-3">{{ __('LOGIN') }}</h2>
            </div>
            <div class="">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row justify-content-center mb-3">

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-center mb-3">

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

{{--                    <div class="row mb-3">--}}
{{--                        <div class="col-md-6 offset-md-4">--}}
{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                <label class="form-check-label" for="remember">--}}
{{--                                    {{ __('Remember Me') }}--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row justify-content-center mb-0">
                        <div class="col-md-6">
                            @if (Route::has('password.request'))
                                <p>
                                    {{ __('Forgot Your Password?') }}
                                    <a class="text-primary text-decoration-none" href="{{ route('password.request') }}">
                                        {{ __('Reset') }}
                                    </a>
                                </p>
                            @endif

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary text-white">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row justify-content-center my-3">
                    <div class="col-md-6">
                        <p>
                            {{ __("I Don't Have an Account") }}
                            <a class="text-primary text-decoration-none" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
