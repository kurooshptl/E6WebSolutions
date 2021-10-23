@extends('app')


@section('content')

    <section id="about" class="about section-bg">
        <div class="container pt-4" data-aos="fade-up">
            <div class="section-title">
                <h2>Portfolio</h2>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item">
                                <img src="/img/portfolio/{{$portfolio->image?$portfolio->image:'portfolio-3.jpg'}}" alt="" class="img-fluid rounded">

                                <div class="blog-item-content bg-white p-5">


                                    <h2 class="mt-3 mb-4"><a href="blog-single.html">{{$portfolio->title}}</a></h2>

                                    <p>{!! $portfolio->text !!}</p>

                                    {{--<div class="tag-option mt-5 clearfix">
                                        <ul class="float-left list-inline">
                                            <li>Tags:</li>
                                            <li class="list-inline-item"><a href="#" rel="tag">Advancher</a></li>
                                            <li class="list-inline-item"><a href="#" rel="tag">Landscape</a></li>
                                            <li class="list-inline-item"><a href="#" rel="tag">Travel</a></li>
                                        </ul>

                                        <ul class="float-right list-inline">
                                            <li class="list-inline-item"> Share: </li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>--}}
                                </div>
                            </div>
                        </div>

{{--
                        <div class="col-lg-12 mb-5">
                            <div class="posts-nav bg-white p-5 d-lg-flex d-md-flex justify-content-between ">
                                <a class="post-prev align-items-center" href="#">
                                    <div class="posts-prev-item mb-4 mb-lg-0">
                                        <span class="nav-posts-desc text-color">- Previous Post</span>
                                        <h6 class="nav-posts-title mt-1">
                                            Donec consectetuer ligula <br>vulputate sem tristique.
                                        </h6>
                                    </div>
                                </a>
                                <div class="border"></div>
                                <a class="posts-next" href="#">
                                    <div class="posts-next-item pt-4 pt-lg-0">
                                        <span class="nav-posts-desc text-lg-right text-md-right text-color d-block">- Next Post</span>
                                        <h6 class="nav-posts-title mt-1">
                                            Ut aliquam sollicitudin leo.
                                        </h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-5">
                            <div class="comment-area card border-0 p-5">
                                <h4 class="mb-4">2 Comments</h4>
                                <ul class="comment-tree list-unstyled">
                                    <li class="mb-5">
                                        <div class="comment-area-box">
                                            <img alt="" src="images/blog/test1.jpg" class="img-fluid float-left mr-3 mt-2">

                                            <h5 class="mb-1">Philip W</h5>
                                            <span>United Kingdom</span>

                                            <div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
                                                <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
                                                <span class="date-comm">Posted October 7, 2018 </span>
                                            </div>

                                            <div class="comment-content mt-3">
                                                <p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="comment-area-box">
                                            <img alt="" src="images/blog/test2.jpg" class="mt-2 img-fluid float-left mr-3">

                                            <h5 class="mb-1">Philip W</h5>
                                            <span>United Kingdom</span>

                                            <div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
                                                <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
                                                <span class="date-comm">Posted October 7, 2018</span>
                                            </div>

                                            <div class="comment-content mt-3">
                                                <p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <form class="contact-form bg-white rounded p-5" id="comment-form">
                                <h4 class="mb-4">Write a comment</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name" id="name" placeholder="Name:">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
                                        </div>
                                    </div>
                                </div>


                                <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

                                <input class="btn btn-main btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
                            </form>
                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap">
                        {{--<div class="sidebar-widget search card p-4 mb-3 border-0">
                            <input type="text" class="form-control" placeholder="search">
                            <a href="#" class="btn btn-mian btn-small d-block mt-2">search</a>
                        </div>--}}


                        <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                            <h5>Other Portfolios</h5>

                            @foreach($portfolios as $item)
                            <div class="media border-bottom py-3">

                                <div class="media-body">
                                    <h6 class="my-2"><a href="{{route('portfolio.show',$item->id)}}">{{$item->title}}</a></h6>
                                    <span class="text-sm text-muted">{{substr($item->text,0,50)}}...</span>
                                </div>
                            </div>
                            @endforeach
                       {{-- <div class="sidebar-widget bg-white rounded tags p-4 mb-3">
                            <h5 class="mb-4">Tags</h5>

                            <a href="#">Web</a>
                            <a href="#">agency</a>
                            <a href="#">company</a>
                            <a href="#">creative</a>
                            <a href="#">html</a>
                            <a href="#">Marketing</a>
                            <a href="#">Social Media</a>
                            <a href="#">Branding</a>
                        </div>--}}
                    </div>
                </div>
            </div>

        </div>

@endsection
