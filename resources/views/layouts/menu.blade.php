<header class="main-header header-style-one">
    <div class="header-top">
        <div class="top-left">
            <ul class="list-style-one">
                <li>
                    <i class="fa fa-map-marker-alt"></i>
                    No(210). Room(2/B), Yamonnar Street,
                    WarSo Quarter, Dawbon Township,
                    Yangon, Myanmar
                </li>
                <li><i class="fa fa-phone-volume"></i>
                    <a href="tel:+959 966825 572">+959 966825 572</a>
                </li>
            </ul>
        </div>

        <div class="top-right">
            <ul class="social-icon-one">
                <li>
                    <a href="#"><span class="fab fa-facebook-square"></span></a>
                </li>
                <li>
                    <a href="#"><span class="fab fa-twitter"></span></a>
                </li>
                <li>
                    <a href="#"><span class="fab fa-pinterest-p"></span></a>
                </li>
                <li>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                </li>
            </ul>
        </div>
    </div>


    <div class="header-lower">
        <div class="main-box">
            <div class="logo-box" style="background-color: white">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/logo.jpg') }}" alt="" title="Dagon Lin Co.,Ltd"
                            style="width: 300px;" />
                    </a>
                </div>
            </div>

            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">
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
                </nav>

                <div class="outer-box">
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/logo.jpg') }}" alt="" title="Fesho" />
                    </a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
            </ul>

            <ul class="contact-list-one">
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Call Now</span>
                        <a href="tel:+959 51 992 54">
                            +959 51 992 54
                        </a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a href="mailto:dagonlinmaritime@gmail.com">dagonlinmaritime@gmail.com</a>
                    </div>
                </li>
            </ul>

            <ul class="social-links">
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>
    </div>

    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">

                <div class="logo">
                    <a href="{{ route('home') }}" title="">
                        <img src="{{ asset('data/logo.jpg') }}" alt="" title="" />
                    </a>
                </div>

                <div class="nav-outer">
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                            </ul>
                        </div>
                    </nav>
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>
</header>
