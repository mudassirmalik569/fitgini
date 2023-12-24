@extends('layout.App')
@section('content')
    <!--*******************
            Preloader start
        ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
            Preloader end
        ********************-->

    <!--**********************************
            Main wrapper start
        ***********************************-->
    <div id="main-wrapper">

     
        @include('layouts.header')
        <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

        <!--**********************************
                Sidebar start
            ***********************************-->
        @include('layouts.sidebar')
        <!--**********************************
                Sidebar end
            ***********************************-->

        <!--**********************************
                Content body start
            ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="form-head d-flex mb-3 align-items-start">
                    <div class="me-auto d-none d-lg-block">
                        <h2 class="text-primary font-w600 mb-0">Dashboard</h2>
                        <p class="mb-0">Welcome to FitGenie Admin!</p>
                    </div>
                </div>
               
            </div>
        </div>
        <!--**********************************
                Content body end
            ***********************************-->

        <!--**********************************
                Footer start
            ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a>
                    2021</p>
            </div>
        </div>
        <!--**********************************
                Footer end
            ***********************************-->

        <!--**********************************
               Support ticket button start
            ***********************************-->

        <!--**********************************
               Support ticket button end
            ***********************************-->


    </div>
@endsection
