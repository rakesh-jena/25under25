<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title','25 under 25')</title>
    <meta content="@yield('meta_description','default description')" name="description">
    <meta content="@yield('meta_keywords','some default keywords')" name="keywords">
    @yield('meta')

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('images/favicon/favicon-16x16.png') }}">
    <link rel="icon" href="{{ URL::asset('images/favicon/favicon.ico') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <!-- bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!--aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ URL::asset('css/tut.css') }}" rel="stylesheet">

</head>

<body>
    {{-- <!-- ======= Header ======= -->
    <header id="header" class="header">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-white navbarpadding">
            <div class="container">
                <a class="navbar-brand nav-logo-desktop" href="{{url('/')}}">
                    <img src="{{ URL::asset('images/25U25-B1.png') }}" alt="25 Under 25" width="150" height="40">
                </a>
                <a class="navbar-brand nav-logo-mobile" href="{{url('/')}}">
                    <img src="{{ URL::asset('images/25U25-B1.png') }}" alt="25 Under 25" width="150" height="40">
                </a>
            </div>
        </nav>
    </header>
    <!-- End Header --> --}}

    <!-- Main Content Wrapper -->
    <div id="page">
        @yield('content')
    </div>
    <!-- End Main Content Wrapper -->
    
    <!-- Footer start-->
    <!-- Footer End-->

    {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a> --}}
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"
        integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        });
    </script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('js/tut.js') }}"></script>    
</body>

</html>