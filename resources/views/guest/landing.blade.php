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
                    <object data="{{ url('/static/image/rizfi/drone.svg') }}" type=""></object>
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
                        <object data="{{ url("static/image/rizfi/profile.svg") }}" type=""></object>
                    </div>
                    <div class="profile-name">
                        Salma Fauziyah
                        <div class="position">
                            Project Manager
                        </div>
                    </div>
                    <div class="review">
                        <div class="stars">
                            <object data="{{ url('static/image/rizfi/stars.svg') }}" type=""></object>
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
    <div class="steps-container">
        <div class="steps-title">
            Hanya butuh 3 langkah untuk <br>
            menjalankan ide cemerlang Anda!
        </div>
        <div class="steps">
            @php
                $json = '{
                    "Sign Up" : "Daftarkan akun Anda dan mulailah mendanai project",
                    "Buka Project" : "Pilih beberapa ide project dan mulailah mendanai",
                    "Jalankan" : "Saatnya buat mimpi Andamenjadi nyata."
                }';

                $steps = json_decode($json);
            @endphp
            @foreach ($steps as $key => $step)
                <div class="step">
                    <div class="step-no">
                        <object data="{{ url("/static/image/rizfi/steps/step_". $loop->index + 1 . "/no.svg") }}"></object>
                    </div>
                    <div class="step-img">
                        <object data="{{ url("/static/image/rizfi/steps/step_". $loop->index + 1 . "/step.svg") }}"></object>
                    </div>
                    <div class="step-title">
                        {{ $key }}
                    </div>
                    <div class="step-desc">
                        {{ $step }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="projects-container">
        <div class="projects-nav">
            <div class="projects-title">
                Project baru yang bisa <br>
                Anda kerjakan
            </div>
            <div class="all-projects">
                Lihat semua
            </div>
        </div>
        <div class="projects">
            @php
                $rows = [0, 1];
                $cols = [0, 1, 2];
            @endphp
            {{-- <object data="{{ url("/static/image/rizfi/projects.svg") }}" type=""></object> --}}
            @foreach ($rows as $row)
                <div class="projects-row">
                    @foreach ($cols as $col)
                        <x-productCard />
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
