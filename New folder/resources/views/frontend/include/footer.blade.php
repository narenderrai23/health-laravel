<footer class="footer">
    <div class="footer-toparea tm-padding-section">
        <div class="container">
            <div class="row widgets footer-widgets">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-contact">
                        <h5 class="widget-title">Get In Touch</h5>
                        <ul>
                            <li><b>Address :</b>{{ $contact->location }}</li>
                            <li><b>Phone :</b><a href="#">+91 {{ $contact->phone }}</a></li>
                            <li><b>Email :</b><a href="#">{{ $contact->email }}</a></li>
                        </ul>
                        <ul class="widget-contact-social">
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-quicklinks">
                        <h5 class="widget-title">Important Links</h5>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="about-us">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="insurance">Insurance</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-quicklinks">
                        <h5 class="widget-title">Our Services</h5>
                        <ul>
                            <li><a href="#">Physiotherapy</a></li>
                            <li><a href="#">Elder caretaker</a></li>
                            <li><a href="#">Patient care at home</a></li>
                            <li><a href="#">Baby care</a></li>
                            <li><a href="#">Doctor’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-newsletter">
                        <h5 class="widget-title">Subscribe us</h5>
                        <p>Get Business news, tip and solutions to
                            your problems from our experts.</p>
                        <form id="tm-mailchimp-form" class="widget-newsletter-form">
                            <input id="mc-email" type="text" placeholder="Email address" required="required">
                            <button id="mc-submit" type="submit" class="tm-button"><i
                                    class="zmdi zmdi-mail-send"></i></button>
                        </form>
                        <div class="tm-mailchimp-alerts">
                            <div class="tm-mailchimp-submitting"></div>
                            <div class="mailchimp-success"></div>
                            <div class="tm-mailchimp-error"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottomarea">
        <div class="container">
            <p class="footer-copyright">Copyright 2024 by <a href="{{url('/')}}">{{ config('app.name') }}</a>. All rights
                reserved</p>
        </div>
    </div>
</footer>
