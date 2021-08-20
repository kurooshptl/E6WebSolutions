@extends('app')


@section('content')


    <!-- ======= Blog Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container pt-4" data-aos="fade-up">

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
@endsection
