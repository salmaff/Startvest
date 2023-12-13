@extends('layouts.dashboard-base')

@section('css')
    <link rel="stylesheet" href="{{ asset('static/css/cak/content/main.css') }}">
@endsection

@section('title')
    Dashboard
@endsection

@section('main-content')

    {{-- Heading --}}
    <div class="heading">
        <div class="headline">
            <h1>Dashboard</h1>
            <h5>Lihat hasil yang telah kamu raih hari ini! 📈💰 #KinerjaHariIni</h5>
        </div>
        <a href="{{ route('dashboard.profile.edit') }}" class="profile">
            <img src="{{ asset('static/image/cak/pfp.png') }}" alt="">
            <div class="profile-text">
                <h4>Cakra</h4>
                <h6>UX Designer</h6>
            </div>
        </a>
    </div>

    <hr>

    {{-- Content --}}
    <div class="content">
        <div class="statistic">
            <h2>Investasi Anda</h2>
            <div class="graph"><p>Ini grafik</p></div>
            <div class="sub-statistic">
                <div>
                    <p>Jumlah Investasi Anda</p>
                    <h2>6 Proyek</h2>
                </div>
                <div>
                    <p>Total Keuntungan</p>
                    <h2>Rp932,290</h2>
                </div>
                <div>
                    <p>Jumlah Transaksi</p>
                    <h2>13</h2>
                </div>
            </div>
        </div>
        <div class="recent">
            <h5>Transaksi Terakhir</h5>
            <div class="recent-lists">
                <a href="">
                    <img src="{{ asset('static/image/cak/robotic_hand_img.png') }}" alt="">
                    <h6>Robotic Hand</h6>
                    <h6>Salma Fauziyah</h6>
                    <h6>12 Januari 2020</h6>
                    <img src="{{ asset('static/image/cak/icon/more.svg') }}" alt="">
                </a>
                <a href="">
                    <img src="{{ asset('static/image/cak/lebrone_img.png') }}" alt="">
                    <h6>LeBrone X</h6>
                    <h6>Masayoshi</h6>
                    <h6>11 Januari 2020</h6>
                    <img src="{{ asset('static/image/cak/icon/more.svg') }}" alt="">
                </a>
                <a href="">
                    <img src="{{ asset('static/image/cak/soffa_img.png') }}" alt="">
                    <h6>Soffa Lembutte</h6>
                    <h6>Shayna</h6>
                    <h6>11 Januari 2020</h6>
                    <img src="{{ asset('static/image/cak/icon/more.svg') }}" alt="">
                </a>
            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection
