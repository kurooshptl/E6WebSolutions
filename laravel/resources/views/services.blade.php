@extends('app')


@section('content')

    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our services</span>
                        <h1 class="text-capitalize mb-4 text-lg">What We Do</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  Section Services Start -->
    <section class="section service border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">Our Services</span>
                        <h2 class="mt-3 content-title ">We provide a wide range of creative services </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5">
                        <i class="ti-desktop"></i>
                        <h4 class="mb-3">Web development.</h4>
                        <p>Drive innovation in your company with custom software development. Solve unique business challenges to achieve significant results.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5 mb-lg-0">
                        <i class="ti-android"></i>
                        <h4 class="mb-3">App development.</h4>
                        <p>Build a successful iOS or Android app that will help you to optimize your processes, deeply engage your customers, and gain more profit.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5 mb-lg-0">
                        <i class="ti-vector"></i>
                        <h4 class="mb-3">Emerging technology.</h4>
                        <p>Meet your customers where they are now with iPhone, Android, Windows Phone apps and mobile friendly websites.</p>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5">
                        <i class="ti-bar-chart"></i>
                        <h4 class="mb-3">QA Services.</h4>
                        <p>Our testing and quality assurance team helps accelerate test cycles by innovative technology frameworks and providing unparalleled service.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5 mb-lg-0">
                        <i class="ti-pencil-alt"></i>
                        <h4 class="mb-3">Support & maintenance</h4>
                        <p>
                            Supporting and maintaining websites, apps, their related assets and solutions can become overwhelming for any organization.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5">
                        <i class="ti-layers"></i>
                        <h4 class="mb-3">Interface Design.</h4>
                        <p>Our team of creative designers can design / redesign your entire website to give your business a fresh and attractive look and feel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Section Services End -->

    <section class="cta-2">
        <div class="container">
            <div class="cta-block p-5 rounded">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-7">
                        <span class="text-color">For Every type business</span>
                        <h2 class="mt-2 text-white">Entrust Your Project to Our Best Team of Professionals</h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{route('contact')}}" class="btn btn-main btn-round-full float-right">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
