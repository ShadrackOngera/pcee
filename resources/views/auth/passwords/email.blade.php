@extends('layouts.app')

@section('content')
<div class="container justify-content-center align-items-center" style="min-height: 70vh">
    <div class="py-5"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">

                <img src="{{ asset('images/pics/smart-logo.png') }}" alt="PCEE LOGO" class="img-fluid mb-3">
                <p class="text-center">
                    {{ __('Reset Password') }}
                </p>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row justify-content-center mb-3">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center mb-0">
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
