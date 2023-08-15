@extends('layouts.main')
@section('title', 'About Us')
@section('content')

    <section class="page-title" style="background-image: url({{ asset('data/banner/2.jpg') }})">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">About of Our Company</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About of Our Company</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="project-details">
        <div class="container">
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
@endsection
