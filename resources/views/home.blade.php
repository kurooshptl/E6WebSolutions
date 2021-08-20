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

        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>We are creative & expert people</h2>
                    <p>Our mission is to give our customers the best value through excellent services with the cutting-edge technologies and low cost at any and every time.</p>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Build Your Website Professionally</a></h4>
                            <p>Driven by innovation and human behavior, our website design agency is changing the way brands connect with audiences in a digital world.</p>



                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Modern & Responsive Design</a></h4>
                            <p>We’re a web design company with deep roots in storytelling. Our innovative web design team creates custom designs that are human-centered and conversion focused.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">High Quality Software Development</a></h4>
                            <p>Drive innovation in your company with custom software development. Solve unique business challenges to achieve significant results.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3><strong>We are dynamic team of creative people</strong></h3>
                            <p>
                                We provide technical support, development, design, and maintenance for all your IT needs, from web to desktop to mobile app development. We’re part of your arsenal of strategic tools.         </p>
                        </div>


                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->


        <!-- ======= Blog Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Blogs</h2>
                    <p>Latest articles to enrich knowledge</p>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="{{route('blog.show',3)}}">12 Tips To Successful Mobile App Development</a></h4>
                            <p>Technology plays an important role in today’s era. There are four major eras of educational technologies the Pre-Microcomputer Era, the Micro-Computer Era, the Internet Era, and the Mobile technologies Era.</p>
                            <a href="{{route('blog.show',3)}}" class="buy-btn">READ MORE</a>
                        </div>

                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="{{route('blog.show',2)}}">Must-Have Things for a New Website</a></h4>
                            <P>Changes to develop a new website are becoming increasingly vital in a digitally-driven world so that customers and prospective clients can feel connected. Give your website all it requires. </P>
                            <a href="{{route('blog.show',2)}}" class="buy-btn">READ MORE</a>
                         </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="{{route('blog.show',1)}}">Behind the Scenes of an Intelligent Enterprise: The Transition of Enterprise Applications to the Cloud</a></h4>
                        <P>Businesses today strive to be more responsive, agile, intuitive, and efficient — in certain words, smarter. </P>
                            <a href="{{route('blog.show',1)}}" class="buy-btn">READ MORE</a>
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
