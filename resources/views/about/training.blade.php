@extends('layouts.main')
@section('title', 'Training')
@section('content')

    <section class="page-title" style="background-image: url({{ asset('assets/images/background/2.jpg') }})">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">About of Our Training</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About of Our Training</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="about-section">
        <div class="anim-icons">
            <div class="float-image wow fadeInRight">
                {{-- <img src="{{ asset('data/about/1.jpg') }}" alt=""> --}}
            </div>
            <span class="icon icon-dotted-map zoom-one"></span>
        </div>

        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">
                                Dagon Lin Co.,Ltd
                            </span>
                            <h2>
                                About of Our Training
                            </h2>
                            <div class="text">
                                <p style="text-align: justify; color: black;">
                                    The company pay much attention to seafarer’s training a lot on it every year,
                                    established a
                                    seafarers training center approved by Department of Marine Administration. Training
                                    computers and international latest professional training software, multi-media training
                                    system, strengthen seafarer’s English and working skills onboard. Employ fully-time
                                    Experience Maser and Chief Engineer to teach seafarer’s oral English. Base on the
                                    requirement of the ship-owner, carry out different trainings. The Marlins Approved
                                    Seafarers’ Test Centre in Myanmar.
                                </p>
                            </div>
                        </div>

                        <div class="content-box">
                            <div class="about-block">
                                <i class="icon flaticon-worldwide-shipping"></i>
                                <h4 class="title">
                                    Our Objective
                                </h4>
                                <p class="text" style="text-align: justify">
                                    "Our objective: Global shipping leadership through innovation, sustainability, and
                                    excellence. Connecting efficiently, driving industry standards, and maximizing value for
                                    stakeholders."
                                </p>
                            </div>
                        </div>

                        <div class="btm-box">
                            <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one">
                                <span class="btn-title">
                                    Contact us
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1 wow fadeInUp">
                            <img src="{{ asset('data/ship/ul002.jpg') }}" alt="">
                        </figure>
                        <div class="experience bounce-y">
                            <strong>
                                <i class="icon flaticon-global"></i>
                                10 + <br> Years
                            </strong>
                            Working Exprience
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-section">
        <div class="bg-image" style="background-image: url({{ asset('assets/images/background/1.jpg') }})"></div>
        <div class="anim-icons">
            <span class="icon icon-wave-line"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">
                    Dagon Lin Co.,Ltd
                </span>
            </div>

            <div class="row">
                <!-- Service Block -->
                <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('data/training/3.jpg') }}" alt=""
                                    style="width: 100%; height: 200px; object-fit: cover; object-position: center; background-size: cover">
                            </figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-cargo-boat"></i>
                            <span class="sub-title" style="color: black;">
                                Welding Methods
                            </span>
                            <div class="text" style="text-align: justify;">
                                Different welding methods such as shielded metal arc welding (SMAW), gas metal arc welding
                                (GMAW), flux-cored arc welding (FCAW), and submerged arc welding (SAW) are often taught.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('data/training/4.jpg') }}" alt=""
                                    style="width: 100%; height: 200px; object-fit: cover; object-position: center; background-size: cover">
                            </figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-cargo-boat"></i>
                            <span class="sub-title" style="color: black;">
                                MATERIAL KNOWLEDGE
                            </span>
                            <div class="text" style="text-align: justify;">
                                Understanding the types of materials commonly used in ship construction is crucial. This
                                includes various grades of steel and sometimes even non-ferrous materials like aluminum.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('data/training/5.png') }}" alt=""
                                    style="width: 100%; height: 200px; object-fit: cover; object-position: center; background-size: cover">
                            </figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-delivery-truck-3"></i>
                            <span class="sub-title" style="color: black;">WELDING AUTOMATION</span>
                            <div class="text" style="text-align: justify;">
                                Some shipyards are adopting automated welding techniques for efficiency and precision.
                                Training in using welding robots and automated systems might also be included.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('data/training/Screenshot (15).png') }}" alt=""
                                    style="width: 100%; height: 200px; object-fit: cover; object-position: center; background-size: cover">
                            </figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-delivery-box-4"></i>
                            <span class="sub-title" style="color: black;">
                                QUALITY CONTROL
                            </span>
                            <div class="text" style="text-align: justify;">
                                Welding quality is critical in shipbuilding to ensure the structural integrity of the
                                vessel. Training programs often teach participants how to inspect welds, identify defects.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
