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

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <img src="/img/E6_Web_solutions_Logo.png" width=250>
                        <p class="pt-2">
                            804, Matrix Tower, Corporate Road, Makarba, Ahmedabad <br><br>
                            <strong>Phone:</strong> +91 98250 98361<br>
                            <strong>Email:  </strong>info@e6websolutions.com<br>
                        </p>
                    </div>

                    <div class="col-lg-1 col-md-2 footer-links text-center"></div>
                    <div class="col-lg-3 col-md-4 footer-links ">
                        <h4>Our Services</h4>
                        <ul class="text-center">
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">Web development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">App development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">Emerging technology</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">QA Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">Support & maintenance</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">Interface Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>We are everywhere. Do not hesitate to reach out to us.</p>
                        <div class="social-links mt-3">
                            <a href="{{config('constants.twitter_tiny_url')}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="{{config('constants.facebook_tiny_url')}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="{{config('constants.instagram_tiny_url')}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <!--                        <a href="constants.skype_tiny_url" class="google-plus"><i class="bx bxl-skype"></i></a>-->
                            <a href="{{config('constants.linked_in_tiny_url')}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>E6WebSolutions - 2021</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="{{route('team')}}">E6WebSolutions Team</a>
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
