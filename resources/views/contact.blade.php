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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.6560068321187!2d72.49845091422455!3d22.999673684964737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b5508c938a3%3A0xc9ae41c72e948c20!2sE6Websolutions!5e0!3m2!1sen!2sin!4v1629459296264!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen loading="lazy"></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="{{route('contact')}}" method="post" class="php-email-form">
                            @csrf
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
    </section>
    <!-- End Contact Section -->

    <div class="google-map">
        <div id="map"></div>
    </div>
@endsection
