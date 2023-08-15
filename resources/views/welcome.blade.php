@extends('layouts.main')
@section('content')
    @include('layouts.slider')


    <section class="features-section">
        <div class="auto-container">
            <div class="row">
                <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-fast-delivery-1"></i>
                            <span class="count">01</span>
                        </div>
                        <div class="content-box">
                            <h4 class="title">
                                <a href="{{ route('about.index') }}">
                                    About of<br />
                                    Our Company
                                </a>
                            </h4>
                            <div class="text">
                                View More Detail
                            </div>
                        </div>
                    </div>
                </div>


                <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-logistics-delivery-6"></i>
                            <span class="count">02</span>
                        </div>
                        <div class="content-box">
                            <h4 class="title">
                                <a href="{{ route('training') }}">
                                    ABOUT TRAINING
                                </a>
                            </h4>
                            <div class="text">
                                DAGON LIN MARITIME SERVICE
                                <br> & Training Center
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-container-2"></i>
                            <span class="count">03</span>
                        </div>
                        <div class="content-box">
                            <h4 class="title">
                                <a href="{{ route('contact.index') }}">
                                    Contact Us
                                </a>
                            </h4>
                            <div class="text">
                                Message us, and we'll reply promptly!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="project-details">
        <div class="container" style="padding-top: 0px;">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-details__top">
                        <div class="project-details__img">
                            <img src="{{ asset('data/ship/MERIT001.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-details__content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="project-details__content-left">
                            <h3 class="">
                                About of Our Company
                            </h3>
                            <p style="text-align: justify; color: black;">
                                Dagon Lin Maritime Service was established in 2016 located in Myanmar and which was formed
                                with former Mariners and educated personnel who are fully complied with under Government
                                Law. The Company offers crew management based on requirement of MLC 2006 Reg 1.4. Our
                                company’s SRPS license which was issued by The Department of Marine Administration (DMA)
                                Union of Myanmar under law of shipping act section 24, Marine Labour Convention, 2006
                                Regulation 1.4” SRPS Licenses No.SRPS/PVN/212.

                                <br><br>

                                Our working philosophy is based on respect for and trusts in all human beings. Dagon Lin
                                Maritime Service offers crew management services covering Recruiting and Training. Our
                                management team is properly trained for international and shore based experience with our
                                best knowledge of crew management, we can be assured of safe, secure and reliable operation
                                and strives to continue the well-known service to out clients and seafarers

                                <br><br>

                                At the mean time we will develop highly qualified Myanmar Officers and Ratings with
                                respectable International quality standard and professional skills. If you need more
                                information, do not hesitate and freely to contact with us at any time. We are looking
                                forward to a mutually beneficial relationship for sites to build long-term relationships.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="call-to-action style-two" style="background-image: url({{ asset('data/ship/usp001.jpg') }})">
        <div class="auto-container">
            <div class="outer-box">
                <div class="sec-title text-center light mb-0">
                    <div class="sub-title">Get in touch with us anytime</div>
                    <h1>Looking for the best <br>logistics transport <span class="highlighted">service?</span></h1>
                    <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one hvr-light"><span
                            class="btn-title">Get A
                            Quote</span></a>
                </div>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="accordion-box wow fadeInRight">
                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                Our Mission
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">
                                        "At Dagon Lin Co.,Ltd, our mission is to create a dynamic and sustainable global
                                        shipping presence. We strive to provide seamless and reliable maritime solutions
                                        that facilitate trade, nurture growth, and foster meaningful connections between
                                        people and markets. By integrating cutting-edge technology, environmental
                                        responsibility, and operational excellence, we aim to deliver unparalleled value to
                                        our customers while upholding the highest standards of safety and service."
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">
                                Our Vision
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        To be a globally recognized center of excellence in shipyard welding training,
                                        providing skilled and proficient welders who contribute to the maritime industry's
                                        growth and innovation.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">
                                Our Values
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text" style="font-size: 18px;">
                                        <span style="color: black;">Innovation:</span> We foster innovation as the
                                        cornerstone of our success, pioneering
                                        solutions that redefine the shipping landscape. <br><br>

                                        <span style="color: black;">Integrity:</span> We uphold the highest ethical
                                        standards, ensuring transparency, honesty,
                                        and trust in all interactions. <br><br>

                                        <span style="color: black;">Collaboration:</span> We build partnerships that amplify
                                        our impact, working closely with
                                        customers and stakeholders for shared growth. <br><br>

                                        <span style="color: black;">Sustainability:</span> We champion eco-conscious
                                        practices, harnessing technology to
                                        minimize our environmental footprint and protect our planet. <br><br>

                                        <span style="color: black;">Excellence:</span> We pursue excellence relentlessly,
                                        delivering unparalleled service,
                                        reliability, and quality. <br><br>

                                        <span style="color: black;">People-Centric:</span> We prioritize our people's
                                        well-being, fostering a diverse and
                                        inclusive culture that values safety and growth. <br><br>

                                        <span style="color: black;">Customer Focus:</span> We prioritize customer needs,
                                        tailoring solutions and delivering
                                        experiences that exceed expectations. <br><br>

                                        <span style="color: black;">Responsibility:</span> We take responsibility for our
                                        global influence, contributing
                                        positively to communities and society at large. <br><br>

                                        <span style="color: black;">Global Perspective:</span> With a global mindset, we
                                        bridge gaps and foster opportunities
                                        for economic and cultural exchange. <br><br>

                                        <span style="color: black;">Adaptability:</span> We embrace change with agility,
                                        navigating challenges and seizing
                                        opportunities to remain at the forefront.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
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


    <section class="page-title" style="background-image: url({{ asset('data/ship/halus.jpg') }})">
        <div class="auto-container">
            <div class="title-outer">
                <center>
                    <h1 class="title">Gallery & Activities</h1>
                </center>
            </div>
        </div>
    </section>

    <section class="project-section">
        <div class="large-container">
            <div class="row">
                @foreach ($activities as $activity)
                    <div class="col-md-12" style="padding: 0px 20px;">
                        <h5 class="custom_title">
                            {{ $activity->title ?? '' }}
                        </h5>
                    </div>
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="project-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp mb-4">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="{{ $image }}" class="lightbox-image">
                                            <img src="{{ $image }}" alt="Dagon Lin Co.,Ltd"
                                                style="width: 100%; height: 300px; object-fit: cover;">
                                        </a>
                                    </figure>
                                </div>
                                <div class="content-box">
                                    <span class="sub-title">
                                        Dagon Lin Co.,Ltd
                                    </span>
                                    <h4 class="title">
                                        {{ $activity->title ?? '' }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <hr>
                @endforeach

            </div>
        </div>
    </section>
@endsection
