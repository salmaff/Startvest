<link rel="stylesheet" href="{{ url('/static/css/rizfi/landing-style.css') }}">

@extends('layouts.main')

@section('main-content')
    <div class="caption-container">
        <div class="caption">
            <div class="caption-bold">
                Kami siap membantu startup <br>
                untuk memulai & mendanai <br>
                kebutuhan mereka
            </div>
            <div class="sub-caption">
                Danai ide terbaik Anda untuk menjadi <br>
                produk nyata dan jadilah kontributor
            </div>
            <div class="find-project">
                Temukan Project
            </div>
        </div>
        <div class="caption-cards">
            <div class="big-card">
                <div id="drone-img">
                    <object data="{{ url('/static/image/drone.svg') }}" type=""></object>
                </div>
                <div class="card-desc">
                    <div class="card-title">
                        Auto Pilot Drone
                    </div>
                    <div class="card-subtitle">
                        Self driving drone, no worry to drive again
                    </div>
                    <div class="progress">
                        <div class="bar-container">
                            <div class="bar"></div>
                        </div>
                        <div class="progress-detail">
                            <div id="percentage">
                                45%
                            </div>
                            <div id="amount">
                                Rp 80.000.000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-card">
                <div class="med-card">
                    Why we fit for you: <br>
                    Easy Money Transaction <br>
                    Special Services & Product <br>
                    Private Equity Shareholders <br>
                </div>
                <div class="profile-card">
                    <div class="profile-img">
                        <object data="{{ url("static/image/profile.svg") }}" type=""></object>
                    </div>
                    <div class="profile-name">
                        Salma Fauziyah
                        <div class="position">
                            Project Manager
                        </div>
                    </div>
                    <div class="review">
                        <div class="stars">
                            <object data="{{ url('static/image/stars.svg') }}" type=""></object>
                        </div>
                        <div class="sub-review">
                            <div id="star-review">5/5</div>
                            <div id="total-projects">208 Projects</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
