@extends('layout.AuthLayout.master-layout')
@section('konten')
<!-- Sign Up Start -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="#" class="">
                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Sign Up</h3>
                    </a>
                </div>
                <form action="">
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" class="form-control" id="floatingText" placeholder="jhondoe">
                        <label for="floatingText">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <!-- Radio button role -->
                    <div class="row mb-3">
                        <div class="col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Admin
                                </label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="0">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Aprover
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- End radio button role -->

                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                </form>
                <p class="text-center mb-0">Already have an Account? <a href="{{ url('auth/login') }}">Sign In</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up End -->
@endsection
