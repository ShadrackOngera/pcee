@extends('layouts.app')
@section('content')
    <div class="banner-contact">
        <div class="container">
            <h1 class="text-center text-white">CONTACT US</h1>
        </div>
    </div>
    <div class="py-5"></div>
    <div>
        <div class="container">
            <div class="row mb-3 align-items-center">
                <div class="col-sm-6 text-center">
                    <h2 class="fw-bold">GET IN TOUCH</h2>
                    <p class="fs-5">
                        We’d love to hear from you
                    </p>
                    <p>

                    </p>
                </div>
                <div class="col-sm-6">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" required>
                            <label for="floatingInput">Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email" required>
                            <label for="floatingInput">Email</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave your message here" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
                            <label for="floatingTextarea2">Message</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                GET IN TOUCH
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="py-5"></div>
            <div class="row text-center align-items-center">
                <div class="col-sm-7">
                    <h5>You can call us directly on – 0755-556955 or 0708-556955</h5>
                    <h5>Or email us on – pcee@admin.com</h5>
                </div>
                <div class="col-sm-5">
                    <h3>NAIROBI GARAGE KILIMANI</h3>
                    <p>8th Floor, Pinetree Plaza, Kaburu Drive</p>
                    <p>Off Ngong Rd. Nairobi.</p>
                    <p>T: +254 790 556 955</p>
                    <p>E: kilimani@nairobigarage.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
@endsection
