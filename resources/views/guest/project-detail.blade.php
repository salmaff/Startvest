<link rel="stylesheet" href="{{ url('static/css/anggun/project-detail-style.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

@extends('layouts.main')

@section('main-content')
    <div class="main-container">
        <div class="detail-container">
            <div class="gallery">
                <swiper-container class="mySwiper" thumbs-swiper=".mySwiper2" space-between="10" loop="true" navigation="true">
                    <swiper-slide>
                        <img src="{{ url("static\image\anggun\Wireboard Detail 1.png") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ url("static\image\anggun\Wireboard Detail 2.png") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ url("static\image\anggun\Wireboard Detail 3.png") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ url("static\image\anggun\Wireboard Detail 4.png") }}" />
                    </swiper-slide>
                </swiper-container>

                <swiper-container class="mySwiper2" loop="true" space-between="10" slides-per-view="4" free-mode="true" watch-slides-progress="true">
                    <swiper-slide>
                        <img src="{{ url("static\image\anggun\Wireboard Detail 1.png") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ url("static\image\anggun\Wireboard Detail 2.png") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ url("static\image\anggun\Wireboard Detail 3.png") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ url("static\image\anggun\Wireboard Detail 4.png") }}" />
                    </swiper-slide>
                </swiper-container>
            </div>
            <div class="desc-container">
                <div class="desc-title">
                    Wireboard Fortune
                </div>
                <div class="desc-subtitle">
                    Era terbaru untuk keyboard mekanik yang cocok untuk semua kalangan.
                </div>
                <div class="progress">
                    <div class="bar-container">
                        <object data="{{ url("static\image\anggun\Progress Bar.svg") }}" type=""></object>
                    </div>
                    <div class="progress-detail">
                        <div id="percentage">
                            80%
                        </div>
                        <div id="amount">
                            Rp 40.000.000
                        </div>
                    </div>
                </div>
                <div class="desc-text">
                    Designed to fit your dedicated typing experience. No matter what you like, linear, clicky or a little in between, we’ve got you covered with three Gateron switches options (Blue, Brown, Red). With a lifespan of 50 million keystroke lifespan we want to make sure that you experience same feedback for every keystroke. <br> <br>
                    With N-key rollover (NKRO on wired mode only) you can register as many keys as you can press at once without missing out characters. It allows to use all the same media keys as conventional macOS. <br> <br>
                    This keyboard can last up to 72 hours typing, or up to 9 days of normal use (8 hrs/day) with a 4000 mAh big battery.
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="position">
                Project Leader:
            </div>
            <div class="profile-user">
                <img class="profile-img" src="{{ asset("static/image/anggun/Mask Group.svg") }}">
                <div class="name">
                    <div class="profile-name">
                        Salma Fauziyah
                    </div>
                    <div class="backer">
                        28.093 backer
                    </div>
                </div>
            </div>
            <div class="ben-head">
                What will you get:
            </div>
            <div class="benefit">
                <img src="{{ url("static/image/anggun/Checklist.png") }}" />
                <div class="ben-text">
                    Equity of the startup directly from the founder
                </div>
            </div>
            <div class="benefit">
                <img src="static/image/anggun/Checklist.png" />
                <div class="ben-text">
                    Special service or product that startup has
                </div>
            </div>
            <div class="benefit">
                <img src="static/image/anggun/Checklist.png" />
                <div class="ben-text">
                    You can also sell your equity once the startup going IPO
                </div>
            </div>
            <a href="/payment">
                <div class="fund-project">
                    Fund Now
                </div>
            </a>
        </div>
    </div>

@endsection
