<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TRading') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
    <meta property="og:title" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
    <meta property="og:description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
    <meta property="og:image" content="https://davur.dexignzone.com/xhtml/page-error-404.html" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/images/favicon.png') }}">
    <link href="{{ asset('dashboard/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('dashboard/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
    {{-- if rpute name login else --}}
  
    {{-- end if --}}
    <link href="{{ asset('dashboard/../../../../cdn.lineicons.com/2.0/LineIcons.css') }}" rel="stylesheet">


</head>

<body>


    <div>
        @yield('content')
    </div>
    </div>


    <script src="{{ asset('dashboard/vendor/global/global.min.js') }}"></script>

    <script src="{{ asset('dashboard/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/custom.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/deznav-init.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/jquery.peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins-init/datatables.init.js') }}"></script>



</body>

</html>
