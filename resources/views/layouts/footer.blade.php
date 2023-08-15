<footer class="main-footer">
    <div class="bg-image" style="background-image: url({{ asset('assets/images/background/5.jpg') }})"></div>
    <div class="anim-icons">
        <span class="icon icon-plane-3 bounce-x"></span>
    </div>

    <!-- Contact info -->
    <div class="contacts-outer">
        <div class="auto-container">
            <div class="row">
                <!-- Contact Info Block -->
                <div class="contact-info-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon flaticon-international-shipping-2"></i></div>
                        <h4 class="title">Address</h4>
                        <div class="text">
                            No(210). Room(2/B), Yamonnar Street,
                            WarSo Quarter, Dawbon Township,
                            Yangon, Myanmar
                        </div>
                    </div>
                </div>

                <!-- Contact Info Block -->
                <div class="contact-info-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon flaticon-stock-1"></i></div>
                        <h4 class="title">Contact</h4>
                        <div class="text">
                            <a href="mailto:dagonlinmaritime@gmail.com">
                                dagonlinmaritime@gmail.com
                            </a>
                            <a href="tel:+959 966825 572">
                                +959 966825 572
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Info Block -->
                <div class="contact-info-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon flaticon-24-hours-2"></i></div>
                        <h4 class="title">Timing</h4>
                        <div class="text">Mon - Sat: 8 am - 5 pm, Sunday: CLOSED</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact info -->

    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <!--Footer Column-->
                <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">Quick Links</h3>
                        <ul class="user-links">
                            <li class="current">
                                <a href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>

                            <li class="">
                                <a href="{{ route('about.index') }}">
                                    About Us
                                </a>
                            </li>

                            <li class="">
                                <a href="{{ route('training') }}">
                                    About of Training
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('activities.index') }}">
                                    Gallery & Activities
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('contact.index') }}">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Footer Column-->
                <div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget gallery-widget">
                        <h3 class="widget-title">Gallery</h3>
                        <div class="widget-content">
                            <div class="outer clearfix">
                                <figure class="image">
                                    <img src="{{ asset('data/ship/halus001.jpg') }}" alt=""
                                        style="width: 100%; height: 100px; object-fit: cover;" />
                                </figure>

                                <figure class="image">
                                    <img src="{{ asset('data/ship/unison001.jpg') }}" alt=""
                                        style="width: 100%; height: 100px; object-fit: cover;" />
                                </figure>

                                <figure class="image">
                                    <img src="{{ asset('data/ship/UNISON LEADER.jpg') }}" alt=""
                                        style="width: 100%; height: 100px; object-fit: cover;" />
                                </figure>

                                <figure class="image">
                                    <img src="{{ asset('data/ship/up001.jpg') }}" alt=""
                                        style="width: 100%; height: 100px; object-fit: cover;" />
                                </figure>

                                <figure class="image">
                                    <img src="{{ asset('data/ship/um001.jpg') }}" alt=""
                                        style="width: 100%; height: 100px; object-fit: cover;" />
                                </figure>

                                <figure class="image">
                                    <img src="{{ asset('data/ship/ul002.jpg') }}" alt=""
                                        style="width: 100%; height: 100px; object-fit: cover;" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Footer Column-->
                <div class="footer-column col-xl-6 col-lg-5 col-md-6 col-sm-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">Google Map</h3>
                        <div class="widget-content">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7639.768678374093!2d96.183201!3d16.782429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecf06a098d81%3A0x32f70d3aad6a10ff!2sDagon%20Lin%20Maritime%20Services%20Co.%2CLtd.!5e0!3m2!1sen!2smm!4v1692078804850!5m2!1sen!2smm"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text">
                    <p>&copy; Copyright 2023</p>
                </div>

                <ul class="social-icon-two">
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
