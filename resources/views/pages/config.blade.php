@extends('layouts.app')
@section('content')
    <div class="d-flex" id="wrapper">
        <div class="d-flex flex-column justify-content-between border-end bg-white" id="sidebar-wrapper">
            <div>
                <div class="sidebar-heading d-flex align-items-center border-bottom px-3">
                    <a href="{{ route('home') }}">
{{--                        <img src="{{ asset('img/logos/logo-full-color.svg') }}" height="24" alt="Logo">--}}
                    </a>
                </div>

                <div id="sidebar-menu">
                    <nav class="nav nav-sidebar flex-column px-1 my-3">
                        <a
                            class="nav-link"
                            href="{{ route('home') }}">
                            Users
                        </a>

                        <a
                            class="nav-link"
                            href="{{ route('home') }}">
                            Offers
                        </a>
                    </nav>
                </div>
            </div>

            <div class="border-top py-3">
                <nav class="nav nav-sidebar flex-column px-1 ">


                    <a class="nav-link" href="#">Help Center</a>
                </nav>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light navbar-seller bg-white border-bottom">
                <div class="container-fluid">
                    <button class="navbar-toggler d-inline" id="sidebarToggle">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link "
                                   id="navbarDropdown" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img
                                        src="https://via.placeholder.com/400x400.jpg/F18910/FFF?text=Nexus"
                                        width="32"
                                        height="32"
                                        class="img-fluid rounded-circle"
                                        alt="..." />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        Account Settings
                                    </a>

                                    <a class="dropdown-item" href="#!">Help Center</a>
                                    <a class="dropdown-item" href="#!">Quick Start Guide</a>
                                    <a class="dropdown-item" href="#!">Chat With Us</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="">
                @yield('content')
            </div>
        </div>
    </div>
@endsection
