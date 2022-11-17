@extends('layouts.app')

@section('content')
    <div class="py-5"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="">
                <div class="text-center">
                    <img src="{{ asset('images/pics/smart-logo.png') }}" alt="PCEE LOGO" class="img-fluid mb-3">
                </div>
                <h2 class="text-center mb-3">
                    {{ __('REGISTER') }}
                </h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-6">
                                <input id="first-name" type="text" class="form-control @error('first-name') is-invalid @enderror" name="first_name" value="{{ old('first-name') }}" required autocomplete="first-name" autofocus placeholder="{{ __('First name') }}">

                                @error('first-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center mb-3">
                            <div class="col-md-6">

                                <input id="last-name" type="text" class="form-control @error('last-name') is-invalid @enderror" name="last_name" value="{{ old('last-name') }}" required autocomplete="first-name" autofocus placeholder="{{ __('Last Name') }}">

                                @error('last-name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center mb-3">

                            <div class="col-md-6">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center mb-3">

                            <div class="col-md-6">

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row justify-content-center mb-3">

                            <div class="col-md-6">

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">

                            </div>
                        </div>

                        <div class="row justify-content-center mb-3">
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('REGISTER') }}
                                </button>
                            </div>
                        </div>

                        <div>
                            <div class="d-grid">
                                <p class="text-center small">
                                    Already have an account?
                                    <a class="nav-link text-center text-primary" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="py-5"></div>
@endsection
