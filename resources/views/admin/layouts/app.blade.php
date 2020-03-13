<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Newbreed Christian Community</title>

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i" rel="stylesheet">


    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{  asset('admin/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/datepicker/tempusdominus-bootstrap-4.css') }}" />
</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('admin.inc.navbar')
        <div class="dashboard-wrapper">
            @include('admin.inc.messages')
            <main class="py-4">
                @yield('content')
            </main>
            @include('admin.inc.footer')
        </div>
    </div>


    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('admin/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('admin/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{ asset('admin/assets/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('admin/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('admin/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{ asset('admin/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <script src="{{ asset('admin/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/js/dashboard-ecommerce.js')}}"></script>
    <!-- datepicker -->
    <script src="{{ asset('admin/assets/vendor/datepicker/moment.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/datepicker/tempusdominus-bootstrap-4.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/datepicker/datepicker.js')}}"></script>
</body>

</html>
