@extends('app')


@section('content')


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="services section-bg">
        <div class="container pt-4" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Latest works</p>
            </div>

            <div class="row">
                @foreach($portfolios as $portfolio)
                <div class="col-xl-4 pt-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="img/portfolio/{{$portfolio->image?$portfolio->image:'portfolio-3.jpg'}}" style="width: 300px;height: 200px;"></div>
                        <h4><a href="{{route('portfolio.show',$portfolio->id)}}">{{$portfolio->title}}</a></h4>
                        <p>{{substr($portfolio->text,0,200)}}...</p>
                        <a href="{{route('portfolio.show',$portfolio->id)}}" class="buy-btn">READ MORE</a>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
