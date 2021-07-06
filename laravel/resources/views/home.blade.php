@extends('app')


@section('content')

    <!-- Slider Start -->
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-10">
                    <div class="block">
                        <span class="d-block mb-3 text-white text-capitalize">Prepare for new future</span>
                        <h1 class="animated fadeInUp mb-5">Our work is <br>presentation of our <br>capabilities.</h1>
                        <a href="{{route('service')}}" target="_blank" class="btn btn-main animated fadeInUp btn-round-full" >Get started<i class="btn-icon fa fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Intro Start -->

    <section class="section intro">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8">
                    <div class="section-title">
                        <span class="h6 text-color ">We are creative & expert people</span>
                        <h2 class="mt-3 content-title">We work with business & provide solution to client with their business problem </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="intro-item mb-5 mb-lg-0">
                        <i class="ti-desktop color-one"></i>
                        <h4 class="mt-4 mb-3">Modern & Responsive design</h4>
                        <p>Our expertise in User Experience Design (UX) has enabled us to simplify and enhance the interaction between our client’s target customers and their digital presence be it on a website, mobile application, email campaign, or even a social media campaign.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="intro-item mb-5 mb-lg-0">
                        <i class="ti-medall color-one"></i>
                        <h4 class="mt-4 mb-3">Awarded licensed company</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="intro-item">
                        <i class="ti-layers-alt color-one"></i>
                        <h4 class="mt-4 mb-3">Build your website Professionally</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Section Intro END -->
    <!-- Section About Start -->

    <section class="section about position-relative">
        <div class="bg-about"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 offset-md-0">
                    <div class="about-item ">
                        <span class="h6 text-color">What we are ?</span>
                        <h2 class="mt-3 mb-4 position-relative content-title">We are dynamic team of creative people</h2>
                        <div class="about-content">
                            <h4 class="mb-3 position-relative">We are Perfect Solution</h4>
                            <p class="mb-5">We provide technical support, development, design, and maintenance for all your IT needs, from web to desktop to mobile app development. We’re part of your arsenal of strategic tools. </p>

                            <a href="{{route('team')}}" class="btn btn-main btn-round-full">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About End -->
    <!-- section Counter Start -->
    <!--<section class="section counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">1730</span> +</h3>
                        <p class="text-muted">Project Done</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">125 </span>M </h3>
                        <p class="text-muted">User Worldwide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">39</span></h3>
                        <p class="text-muted">Availble Country</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">14</span></h3>
                        <p class="text-muted">Award Winner </p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- section Counter End  -->
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
    <!-- Section Cta Start -->
    <section class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-item  bg-white p-5 rounded">
                        <span class="h6 text-color">We create for you</span>
                        <h2 class="mt-2 mb-4">Entrust Your Project to Our Best Team of Professionals</h2>
                        <p class="lead mb-4">Have any project on mind? For immidiate support :</p>
                        <h3><i class="ti-mobile mr-3 text-color"></i>{{config('constants.phone_number')}}</h3>
                        <h3><i class="fa fa-envelope mr-3 text-color"></i>{{config('constants.email_id')}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Section Cta End-->
    <!-- Section Testimonial Start -->
    <!--<section class="section testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ">
                    <div class="section-title">
                        <span class="h6 text-color">Clients testimonial</span>
                        <h2 class="mt-3 content-title">Check what's our clients say about us</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row testimonial-wrap">
                <div class="testimonial-item position-relative">
                    <i class="ti-quote-left text-color"></i>

                    <div class="testimonial-item-content">
                        <p class="testimonial-text">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti facilis blanditiis.</p>

                        <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">Thomas Johnson</h5>
                            <p>Excutive Director,themefisher</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative">
                    <i class="ti-quote-left text-color"></i>

                    <div class="testimonial-item-content">
                        <p class="testimonial-text">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

                        <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">Mickel hussy</h5>
                            <p>Excutive Director,themefisher</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative">
                    <i class="ti-quote-left text-color"></i>

                    <div class="testimonial-item-content">
                        <p class="testimonial-text">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti.</p>

                        <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">James Watson</h5>
                            <p>Excutive Director,themefisher</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative">
                    <i class="ti-quote-left text-color"></i>

                    <div class="testimonial-item-content">
                        <p class="testimonial-text">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

                        <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">Mickel hussy</h5>
                            <p>Excutive Director,themefisher</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Section Testimonial End -->
    <section class="section latest-blog bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">Latest News</span>
                        <h2 class="mt-3 content-title text-white">Latest articles to enrich knowledge</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card bg-transparent border-0">
                        <img src="images/blog/1.jpg" alt="" class="img-fluid rounded">

                        <div class="card-body mt-2">
                            <div class="blog-item-meta">
                                <a href="#" class="text-white-50">Design<span class="ml-2 mr-2">/</span></a>
                                <a href="#"  class="text-white-50">Ui/Ux<span class="ml-2">/</span></a>
                                <a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i>admin</a>
                            </div>

                            <h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white ">How to improve design with typography?</a></h3>

                            <a href="blog-single.html" class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card border-0 bg-transparent">
                        <img src="images/blog/2.jpg" alt="" class="img-fluid rounded">

                        <div class="card-body mt-2">
                            <div class="blog-item-meta">
                                <a href="#" class="text-white-50">Design<span class="ml-2 mr-2">/</span></a>
                                <a href="#"  class="text-white-50">Ui/Ux<span class="ml-2">/</span></a>
                                <a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i>admin</a>
                            </div>

                            <h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white">Interactivity design may connect consumer</a></h3>

                            <a href="blog-single.html" class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card border-0 bg-transparent">
                        <img src="images/blog/3.jpg" alt="" class="img-fluid rounded">

                        <div class="card-body mt-2">
                            <div class="blog-item-meta">
                                <a href="#" class="text-white-50">Design<span class="ml-2 mr-2">/</span></a>
                                <a href="#"  class="text-white-50">Ui/Ux<span class="ml-2">/</span></a>
                                <a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i>admin</a>
                            </div>

                            <h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white">Marketing Strategy to bring more affect</a></h3>

                            <a href="blog-single.html" class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-70 position-relative">
        <div class="container">
            <div class="cta-block-2 bg-gray p-5 rounded border-1">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-7">
                        <span class="text-color">For Every type business</span>
                        <h2 class="mt-2 mb-4 mb-lg-0">Entrust Your Project to Our Best Team of Professionals</h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{route('contact')}}" class="btn btn-main btn-round-full float-lg-right ">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
