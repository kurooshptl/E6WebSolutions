<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Stay updated with the latest blogs, news, and plans.</p>
                    <form action="{{route('subscribe')}}" method="post" class="subscription-email-form">
                        @csrf
                        <input type="email" name="email" placeholder="Email ID">

                        <input type="submit" value="Subscribe">

                    </form>
                    <div class="my-3 subscription-errors">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3> {{config('constants.app_name')}} </h3>
                    <p>
                        {{config('constants.address')}} <br><br>
                        <strong>Phone:</strong> {{config('constants.phone_number')}}<br>
                        <strong>Email:  </strong>{{config('constants.email_id')}}<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('team')}}">Teams</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('blog')}}">Blogs</a></li>
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('')}}">Terms of service</a></li>--}}

                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">Marketing</a></li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="{{config('constants.twitter_tiny_url')}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="{{config('constants.facebook_tiny_url')}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="{{config('constants.instagram_tiny_url')}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="{{config('constants.skype_tiny_url')}}" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="{{config('constants.linked_in_tiny_url')}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>{{config('constants.app_name')}} - 2021</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="{{route('team')}}">{{config('constants.app_name')}} Team</a>
        </div>



    </div>
</footer><!-- End Footer -->

<!-- Vendor JS Files -->
<script src="{{asset('vendor/aos/aos.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
