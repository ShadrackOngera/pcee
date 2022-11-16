@extends('layouts.app')
@section('content')
    <div class="banner-home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 mb-3">
                    <hr class="home-bar">
                    <h1>YOUR ONLINE GARAGE PLATFORM</h1>
                    <h5>orem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna lacus, elementum ac eleifend vitae, volutpat vel ipsum. Mauris tincidunt turpis vitae vehicula vestibulum.</h5>

                    <div class="row">
                        <div class="col-sm-6 d-grid mb-3">
                            <a href="{{ route('login') }}" class="btn btn-primary">SIGN IN</a>
                        </div>
                        <div class="col-sm-6 d-grid mb-3">
                            <a href="{{ route('register') }}" class="btn btn-outline-primary">SIGN UP</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('images/pics/showcase.png') }}" alt="Home Garage" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="py-5"></div>
    <div>
        <div class="container">
            <div class="text-center mb-3">
                <p class=" text-muted mb-5">HOW IT WORKS</p>
                <div class="row justify-content-center mb-5">
                    <div class="col-sm-8">
                        <h2 class="display-6 mb-0">EASILY MANAGE YOUR CAR WITH PCEE DEVICES & APPS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-center mb-3">
                    <img src="{{ asset('images/pics/usb-stick.jpg') }}" alt="PCEE ADAPTER" class="img-fluid rounded-3 mb-2">

                    <p >
                        Get the pcee adapter
                    </p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <img src="{{ asset('images/pics/car-navigation.jpg') }}" alt="PCEE ADAPTER" class="img-fluid rounded-3 mb-2">

                    <p >
                        Connect your phone
                    </p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <img src="{{ asset('images/pics/car-24.jpg') }}" alt="PCEE ADAPTER" class="img-fluid rounded-3 mb-2">

                    <p >
                        Enjoy 24hr service and
                        advanced diagnostics
                    </p>
                </div>
            </div>
        </div>
        <div class="py-5"></div>
    </div>

    <div class="bg-gray-200" style="min-height: 70vh">
        <div class="container py-5">
            <h3 class="text-center text-muted">PRODUCT SHOWCASE</h3>
        </div>
    </div>

    <div>
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <hr class="home-bar ms-5">
                    <h3 class="fw-bold ms-5 mb-3">PRODUCT FEATURES</h3>
                    <div>
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="numbers-border fw-bold">1</h3>
                            <h5 class="fw-bold">Cloud Storage</h5>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="numbers-border fw-bold">2</h3>
                            <h5 class="fw-bold">Another Feature</h5>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="numbers-border fw-bold">3</h3>
                            <h5 class="fw-bold">Another Feature</h5>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="numbers-border fw-bold">4</h3>
                            <h5 class="fw-bold">Another Feature</h5>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="numbers-border fw-bold">5</h3>
                            <h5 class="fw-bold">Another Feature</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-200" style="min-height: 72vh">
        <div class="container py-5">
            <h2 class="text-center fw-bold mb-3">PRICING</h2>

            <div class="row mb-3 text-center">
                <div class="col-sm-4 mb-3">
                    ITEM ONE
                </div>
                <div class="col-sm-4 mb-3">
                    ITEM ONE
                </div>
                <div class="col-sm-4 mb-3">
                    ITEM ONE
                </div>
            </div>

            <div class="text-center">
                <a href="#" class="">Locate shops near me?</a>
            </div>
        </div>
    </div>

    <div>
        <div class="container py-5">
            <h2 class="fw-bold text-center">DOWNLOAD APP</h2>
            <div class="row align-items-center">
                <div class="col-sm-7 mb-3">
                    <div class="col-sm-6 mb-5">
                        <h5>
                            Get the pcee apps today to get the
                            best features for your vehicle
                        </h5>
                    </div>
                    <div class="d-flex">
                        <a href="#" class="nav-link me-4">
                            <img src="{{ asset('images/pics/get-on-applestore.png') }}" alt="..." class="img-fluid">
                        </a>
                        <a href="#" class="nav-link">
                            <img src="{{ asset('images/pics/get-on-playstore.png') }}" alt="..." class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="">
                        <img src="{{ asset('images/pics/phone.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
