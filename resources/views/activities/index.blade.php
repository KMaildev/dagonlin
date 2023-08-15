@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="page-title" style="background-image: url({{ asset('assets/images/background/2.jpg') }})">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Gallery & Activities</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Gallery & Activities</li>
                </ul>
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
