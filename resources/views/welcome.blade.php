@extends('layouts.app')
@section('content')
    <div class="banner-home">
        <div class="container align-self-center text-center">
            <h1 class="fw-bolder text-uppercase text-success-lite">portable Car Engineering Environment</h1>
            <p class="fs-5 text-capitalize">
                The next step in the automotive industry
            </p>
        </div>
    </div>

    <div class="py-5"></div>
    <div class="">
        <div class="container text-center">
            <div class="row mb-3">
                <div class="col-sm-4 mb-3 align-self-center">
                    <div class="card shadow h-100">
                        <img src="{{ asset('images/pics/car-navigation.jpg') }}" alt="" class="img-fluid">
                        <p>
                            Car Tracking
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 align-self-center">
                    <div class="card shadow h-100">
                        <img src="{{ asset('images/pics/car-ignition.jpg') }}" alt="" class="img-fluid border-3">
                        <p>
                            Positive Ignition
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 align-self-center">
                    <div class="card shadow h-100">
                        <img src="{{ asset('images/pics/car-24.jpg') }}" alt="" class="img-fluid">
                        <p>
                            24Hr Mobile Mechanical Services
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-4 mb-3 align-self-center">
                    <div class="card shadow h-100">
                        <img src="{{ asset('images/pics/rubber.jpg') }}" alt="" class="img-fluid">
                        <p>
                            Car Service
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 align-self-center">
                    <div class="card shadow h-100">
                        <img src="{{ asset('images/pics/car-clean.jpg') }}" alt="" class="img-fluid border-3">
                        <p>
                            Predictive Maintenance
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 align-self-center">
                    <div class="card shadow h-100">
                        <img src="{{ asset('images/pics/lifted-car.jpg') }}" alt="" class="img-fluid">
                        <p>
                            Car Diagnosis
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5"></div>
    <div>
        <div class="container text-center">
            <h2 class="fw-bold mb-3">
                HOW IT WORKS
            </h2>
            <div class="row mb-3 align-items-center">
                <div class="col-sm-6 mb-3" >
                    <h4></h4>
                    <p class="fw-bold fs-5">
                        Plug in the PCEE vehicle communication interface to the vehicle (buy here -link-) through the CANbus.
                    </p>
                </div>
                <div class="col-sm-6 mb-3">
                    <img src="{{ asset('images/pics/usb-stick.jpg') }}" alt="How it works" class="img-fluid">
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-sm-6">
                    <img src="{{ asset('images/pics/credit-card.jpg') }}" alt="Credit card" class="img-fluid">
                </div>
                <div class="col-sm-6">
                    <p class="fw-bold fs-5">
                        Pay subscription for the service.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
@endsection
