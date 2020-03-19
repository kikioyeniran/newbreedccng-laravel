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
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">


    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css')}}">
    <link href="{{  asset('css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slide.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('inc.navbar')
        <main class="py-4">
            @yield('content')
        </main>
        @include('inc.footer')
    </div>


    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/slide.js')}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/aos.js')}}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{ asset('js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>
