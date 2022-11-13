<div class="bg-footer">
    <div class="container">
        <div class="row py-3">
            <div class="col-sm-4">
                <h4>SERVICES</h4>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">CAR TRACKING</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">CAR DIAGNOSIS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">POSITIVE IGNITION</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">CAR SERVICE</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">PREDICTIVE MAINTENANCE</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h4 class="">QUICK LINKS</h4>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">LOGIN</a>
                    </li>

                </ul>
            </div>
            <div class="col-sm-4">
                <h4 class="text-center">SUBSCRIBE TO OUR NEWSLETTER</h4>
                <form action="{{ route('mailing.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Name" required>
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Example@email.com" required>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-warning" type="submit">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <small>©Copyright {{ date('Y') }} {{ config('app.name') }}.</small>
            <small>All Rights Reserved</small>
        </div>
    </div>
</div>
