@extends('layout.App')
@section('content')
<div id="preloader">
    <!-- Preloader content -->
</div>

<div id="main-wrapper">
    @include('layouts.header')
    @include('layouts.sidebar')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h2 class="header-title">Edit User</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="age" name="age" value="{{ $user->age }}">
                                </div>
                                <div class="mb-3">
                                    <label for="weight" class="form-label">Weight</label>
                                    <input type="text" class="form-control" id="weight" name="weight" value="{{ $user->weight }}">
                                </div>
                                <div class="mb-3">
                                    <label for="height" class="form-label">Height</label>
                                    <input type="text" class="form-control" id="height" name="height" value="{{ $user->height }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Existing content -->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by Mudassir Malik 2023</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
