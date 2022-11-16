@extends('layouts.app')
@section('content')
    <div class="banner-features">
        <div class="container">
            <h1 class="display-3">
                FEATURES
            </h1>
        </div>
    </div>

    <div class="bg-gray-800">
        <div class="container py-5">
            <div class="row align-items-center py-4 text-light">
                <div class="col-sm-6">
                    <h2>Mobile Mechanics.</h2>
                    <p class="fs-5">
                        Get mechanical services delivered at your convenient location be it at home,work or by the roadside at no additional costs
                    </p>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="{{ asset('images/pics/mobiles.svg') }}" alt="mobiles" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-dark text-light">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-sm-6 text-center">
                    <img src="{{ asset('images/pics/pred.svg') }}" alt="mobiles" class="img-fluid">
                </div>
                <div class="col-sm-6">
                    <h2>Predictive Maintenance.</h2>
                    <p class="fs-5">
                        Get alerts on when maintainance of the vehicle is needed and as per the manufacturer's guidelines.
                        This services may include like engine servicing,brakes replacement among other things
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-800 text-light">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-sm-6">
                    <h2>Car Tracking.</h2>
                    <p class="fs-5">
                        The devices we use to collect real time data also have gps enabling our mechanics to get to you as quick as possible
                    </p>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="{{ asset('images/pics/tracking.svg') }}" alt="mobiles" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
