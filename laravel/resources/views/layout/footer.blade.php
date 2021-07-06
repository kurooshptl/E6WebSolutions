
<!-- footer Start -->
<footer class="footer section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget">
                    <h4 class="text-capitalize mb-4">Company</h4>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget">
                    <h4 class="text-capitalize mb-4">Quick Links</h4>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('service')}}">Services</a></li>
                        <li><a href="{{route('team')}}">Team</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget">
                    <h4 class="text-capitalize mb-4">Subscribe Us</h4>
                    <p>Subscribe to get latest news article and resources  </p>

                    <form action="#" class="sub-form">
                        <input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
                        <a href="#" class="btn btn-main btn-small">subscribe</a>
                    </form>
                </div>
            </div>

            <div class="col-lg-3 ml-auto col-sm-6">
                <div class="widget">
                    <div class="logo mb-4">
                        <h3>E6Web<span>Solutions</span></h3>
                    </div>
                    <h6><a href="mailto:{{config('constants.email_id')}}">{{config('constants.email_id')}}</a></h6>
                    <a href="tel:{{config('constants.phone_number')}}"><span class="text-color h4">{{config('constants.phone_number')}}</span></a>
                </div>
            </div>
        </div>

        <div class="footer-btm pt-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        &copy; Copyright Reserved to <span class="text-color">E6WebSolutions.</span>  By 2021</a>
                    </div>
                </div>
                <div class="col-lg-6 text-left text-lg-right">
                    <ul class="list-inline footer-socials">
                        <li class="list-inline-item"><a href="{{config('constants.facebook_url')}}" target="_blank"><i class="ti-facebook mr-2"></i>Facebook</a></li>
                        <li class="list-inline-item"><a href="{{config('constants.instagram_url')}}" target="_blank"><i class="ti-instagram mr-2"></i>Instagram</a></li>
                        <li class="list-inline-item"><a href="{{config('constants.linked_in_url')}}" target="_blank"><i class="ti-linkedin mr-2 "></i>Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
