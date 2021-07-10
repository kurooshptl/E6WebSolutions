@extends('app')


@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Prepare for new future</h1>
                    <h2>Our work is presentation of our capabilitiesp</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{route('service')}}" class="btn-get-started scrollto">Get Started</a>
                         </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-12">
                        <p class="text-center">
                            Provide unique reliable and excellent professional services that offer the best possible value for money with a reasonable cost of possession as a result consequently lowering initial investments needed for organizations development.
                            We anticipate our Client's and make every effort to surpass our client's expectations.
                            We offer opportunities for growth and enrichment for our employees and business partners.
                        </p>

                    </div>

                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>We are dynamic team of creative people</strong></h3>
                            <p>
                                We provide technical support, development, design, and maintenance for all your IT needs, from web to desktop to mobile app development. We’re part of your arsenal of strategic tools.         </p>
                        </div>


                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>We are creative & expert people</h2>
                    <p>We work with business & provide solution to client with their business problem</p>
                  </div>

                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Modern & Responsive design</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Awarded licensed company</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Build your website Professionally</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>For Every type business</h3>
                        <p> Entrust Your Project to Our Best Team of Professionals</p>

                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="{{route('contact')}}">Contact</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

    </main><!-- End #main -->

@endsection
