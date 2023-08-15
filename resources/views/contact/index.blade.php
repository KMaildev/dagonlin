@extends('layouts.main')
@section('content')
    <section class="page-title" style="background-image: url({{ asset('assets/images/background/2.jpg') }})">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Contact</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Need any help?</span>
                            <h2>Get in touch with us</h2>
                            <div class="text">
                                Alternatively, you may contact us by filling up the contact form. We will respond you
                                shortly.
                            </div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6>Phone</h6>
                                    <a href="tel:+959 775 292 252">
                                        +959 775 292 252,
                                    </a>
                                    <a href="tel:+959 51 992 54">
                                        +959 51 992 54
                                    </a>
                                    <br>
                                    <a href="tel:+959 966825 572">
                                        +959 966825 572
                                    </a>
                                </div>
                            </li>

                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Email</h6>
                                    <a href="mailto:dagonlinmaritime@gmail.com">dagonlinmaritime@gmail.com</a>
                                </div>
                            </li>

                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6>
                                        Address
                                    </h6>
                                    <span>
                                        No(210). Room(2/B), Yamonnar Street, <br> WarSo Quarter, Dawbon Township, <br>
                                        Yangon, Myanmar
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">Send us email</span>
                        <h2>Feel free to write</h2>
                    </div>
                    <form class="join-form" method="post" action="{{ route('contact.store') }}" autocomplete="off"
                        id="create-form" autocomplete="off">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Name <small>*</small></label>
                                    <input name="name" class="form-control" type="text" placeholder="Enter Name" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Email <small>*</small></label>
                                    <input name="email" class="form-control required email" type="email"
                                        placeholder="Enter Email" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Subject <small>*</small></label>
                                    <input name="subject" class="form-control required" type="text"
                                        placeholder="Enter Subject" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" type="text"
                                        placeholder="Enter Phone" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Message</label>
                            <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span
                                    class="btn-title">Send message</span></button>
                            <button type="reset" class="theme-btn btn-style-one"><span
                                    class="btn-title">Reset</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.8843475512103!2d96.18062557418797!3d16.782428584005306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecf06a098d81%3A0x32f70d3aad6a10ff!2sDagon%20Lin%20Maritime%20Services%20Co.%2CLtd.!5e0!3m2!1sen!2smm!4v1692072580195!5m2!1sen!2smm"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
