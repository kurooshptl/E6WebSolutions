@extends('app')


@section('content')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container pt-4" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>We are a team of professionals. Don’t Hesitate to contact with us for any kind of information</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>{{config('constants.address')}}</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{config('constants.email_id')}}</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>{{config('constants.phone_number')}}</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="{{route('contact')}}" method="post" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required value="{{old('name')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Phone</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required {{old('phone')}}>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required>{{old('message')}}</textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

==========================================================

    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Contact Us</span>
                        <h1 class="text-capitalize mb-4 text-lg">Get in Touch</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form start -->
    <section class="section service border-top">
        <div class="container">   <!-- Success message -->
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form id="contact-form" class="contact__form" method="post" action="/contact">
                        <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                        <!-- form message -->
                       {{-- <div class="row">
                            <div class="col-12">
                                @if(Session::has('success'))
                                    <div class="alert alert-success contact__msg"  role="alert">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
                            </div>
                        </div>--}}
                        <!-- end message -->
                        <span class="text-color">Send a message</span>
                        <h3 class="text-md mb-4">Contact Form</h3>
                        <div class="form-group">
                            <input name="name" type="text" class="form-control  {{ $errors->has('name') ? 'error' : '' }}" placeholder="Name" value="{{old('name')}}">
                            @error('name')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="phone" type="tel"  class="form-control  {{ $errors->has('phone') ? 'error' : '' }}" placeholder="Contact Number" value="{{old('phone')}}">
                            @error('phone')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control  {{ $errors->has('email') ? 'error' : '' }}" placeholder="Email Address" value="{{old('email')}}">
                            @error('email')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="message" class="form-control  {{ $errors->has('message') ? 'error' : '' }}" rows="4" placeholder="Message">{{old('message')}}</textarea>
                            @error('message')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-main" name="submit" type="submit">Send Message</button>
                    </form>
                </div>

                <div class="col-lg-5 col-sm-12">
                    <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                        <span class="text-muted">We are Professionals</span>
                        <h2 class="mb-5 mt-2">Don’t Hesitate to contact with us for any kind of information</h2>

                        <ul class="address-block list-unstyled">
                            <li>
                                <i class="ti-direction mr-3"></i>{{config('constants.address')}}
                            </li>
                            <li>
                                <i class="ti-email mr-3"></i>Email: {{config('constants.email_id')}}
                            </li>
                            <li>
                                <i class="ti-mobile mr-3"></i>Phone:{{config('constants.phone_number')}}
                            </li>
                        </ul>

                        <ul class="social-icons list-inline mt-5">
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="google-map">
        <div id="map"></div>
    </div>
@endsection
