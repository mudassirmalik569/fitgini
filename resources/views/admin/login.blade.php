@extends('layout.App')
@section('content')
    <div class="authincation front-end h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-12 h-100 d-flex align-items-center">
                    <div class="authincation-content style-1">
                        <div class="row h-100">
                            <div class="col-lg-6 h-100">
                                <div class="img-bx">
                                    <img src="{{ asset('dashboard/images/login.jpg') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="auth-form">
                                    <h4 class="main-title"> FitGenie </h4>
                                    <form action="{{ route('admin.login.post') }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-3 pb-3">
                                            <label class="font-w600">Email Address</label>
                                            <input type="email" class="form-control solid" placeholder="Enter Email"
                                                name="email">
                                        </div>
                                        <div class="form-group mb-3 pb-3">
                                            <label class="font-w600">Password</label>
                                            <input type="password" class="form-control solid" placeholder="Enter Password"
                                                name="password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block rounded">Sign
                                                In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
