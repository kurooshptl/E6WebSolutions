<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">

    <meta name="author" content="themefisher.com">
    <title>@yield('title', config('app.name'))</title>

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{asset('plugins/themify/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/magnific-popup/dist/magnific-popup.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick-theme.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="{{asset('images/icon.ico')}}" type="image/icon type">
</head>


<body>

<!-- Header Start -->

<header class="navigation">
    <div class="header-top ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-md-4">
                    <div class="header-top-socials text-center text-lg-left text-md-left">
                        <a href="{{config('constants.facebook_url')}}" target="_blank"><i class="ti-facebook"></i></a>
                        <a href="{{config('constants.instagram_url')}}" target="_blank"><i class="ti-instagram"></i></a>
{{--                        <a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>--}}
                        <a href="{{config('constants.linked_in_url')}}" target="_blank"><i class="ti-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
                    <div class="header-top-info">
                        <a href="tel:{{config('constants.phone_number')}}">Call Us : <span>{{config('constants.phone_number')}}</span></a>
                        <a href="mailto:{{config('constants.email_id')}}" ><i class="fa fa-envelope mr-2"></i><span>{{config('constants.email_id')}}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg  py-4" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                E6Web<span>Solutions</span>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('service')}}">Services</a></li>
{{--                    <li class="nav-item"><a class="nav-link" href="{{route('portfolio')}}">Portfolio</a></li>--}}
                    <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                </ul>

                <form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
                    <a href="{{route('quote')}}" class="btn btn-solid-border btn-round-full">Get a Quote</a>
                </form>
            </div>
        </div>
    </nav>
</header>

<!-- Header Close -->
<div class="main-wrapper ">

@yield('content')

@extends('layout.footer')
</div>
@extends('layout.scripts')

</body>
</html>
