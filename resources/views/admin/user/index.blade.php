@extends('layout.App')
@section('content')
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
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
                                <h2 class="header-title">User List</h2>
                                <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Add</a>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @elseif(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('error') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <table class="table table-bordered text-capitalize" id="profitTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Age</th>
                                            <th>Weight</th>
                                            <th>Height</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <!-- Here you will populate the table rows dynamically with user data -->
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone ?? 'N/A' }}</td>
                                                <td>{{ $user->age ?? 'N/A' }}</td>
                                                <td>{{ $user->weight ?? 'N/A' }}</td>
                                                <td>{{ $user->height ?? 'N/A' }}</td>
                                                <td>
                                                    <a href="{{ route('admin.user.edit', $user->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="{{ route('admin.user.delete', $user->id) }}"
                                                        class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by Mudassir Malik 2023</p>
                </div>
            </div>

        </div>
    </div>
   
@endsection
