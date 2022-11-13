@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <h1 class="text-center">CONTACT US</h1>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row mb-3">
                <div class="col-sm-6"></div>
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
        </div>
    </div>
@endsection
