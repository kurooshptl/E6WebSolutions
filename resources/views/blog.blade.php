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
                @foreach($blogs as $blog)
                <div class="col-xl-4 pt-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="{{asset($blog->image)}}" style="width: 300px;height: 200px;"></div>

                        <h4><a href="{{route('blog.show',$blog->id)}}">{{$blog->title}}</a></h4>
                        <p>{{substr($blog->text,0,250)}}...</p>
                        <a href="{{route('blog.show',$blog->id)}}" class="buy-btn">READ MORE</a>
                    </div>

                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
