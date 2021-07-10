<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E6 Web Solutions</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png" rel="')}}apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Arsha - v4.3.0
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-scrolled">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">{{env('APP_NAME')}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{route('about')}}">About</a></li>
                <li><a class="nav-link scrollto" href="{route('service')}}">Services</a></li>
{{--                <li><a class="nav-link   scrollto" href="{{route('portfolio')}}">Portfolio</a></li>--}}
                <li><a class="nav-link scrollto" href="{{route('blog')}}">Blog</a></li>

                <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact</a></li>
                <li><a class="getstarted scrollto" href="#about">Get Quote</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- Header Close -->
<main id="main">

@yield('content')

</main>
@extends('layout.footer')
</div>
@extends('layout.scripts')

</body>
</html>
