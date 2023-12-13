@extends('layouts.dashboard-base')

@section('css')
    <link rel="stylesheet" href="{{ asset('static/css/cak/content/invest/detail.css') }}">
@endsection

@section('title')
    Dashboard
@endsection

@section('main-content')

    {{-- Heading --}}
    <div class="heading">
        <div class="headline">
            <img src="{{ asset('static/image/cak/logo/logo-hire-putih.svg') }}" alt="">
            <div class="text">
                <h1>H!re</h1>
                <h5>Temukan pekerjaan impianmu dengan mudah</h5>
            </div>
        </div>
        <a href="" class="profile">
            <img src="{{ asset('static/image/cak/pfp.png') }}" alt="">
            <div class="profile-text">
                <h4>Cakra</h4>
                <h6>UX Designer</h6>
            </div>
        </a>
    </div>

    {{-- Content --}}
    <div class="content">
        <div class="part">
            <h1>Saldomu</h1>
            <div class="saldo">
                <h1>Rp 46.000.000,00</h1>
                <img src="{{ asset('static/image/cak/saldo.svg') }}" alt="">
            </div>
        </div>
        <div class="part">
            <h1>Keuntungan</h1>
            <p>Ini Grafik</p>
        </div>
        <div class="part">
            <div class="month">
                <h3>Jan</h3>
                <h3>Feb</h3>
                <h3>Mar</h3>
                <h3>Apr</h3>
                <h3>May</h3>
                <h3>Jun</h3>
                <h3>Jul</h3>
                <h3>Aug</h3>
                <h3>Sep</h3>
                <h3>Oct</h3>
                <h3>Nov</h3>
                <h3>Dec</h3>
            </div>
            <div class="list">
                <h3>31 Aug 2077</h3>
                <div class="item profit">
                    <h3>Portofolio</h3>
                    <h2>Rp 46.000.000</h2>
                    <h3>Keuntungan</h3>
                    <h2>+ Rp 2.000.000</h2>
                </div>
            </div>
            <div class="list">
                <h3>4 Aug 2077</h3>
                <div class="item loss">
                    <h3>Portofolio</h3>
                    <h2>Rp 44.000.000</h2>
                    <h3>Keuntungan</h3>
                    <h2>- Rp 1.000.000</h2>
                </div>
            </div>
            <div class="list">
                <h3>29 Jul 2077</h3>
                <div class="item loss">
                    <h3>Portofolio</h3>
                    <h2>Rp 45.000.000</h2>
                    <h3>Keuntungan</h3>
                    <h2>- Rp 1.000.000</h2>
                </div>
            </div>
            <div class="list">
                <h3>4 Jul 2077</h3>
                <div class="item profit">
                    <h3>Portofolio</h3>
                    <h2>Rp 46.000.000</h2>
                    <h3>Keuntungan</h3>
                    <h2>+ Rp 2.000.000</h2>
                </div>
            </div>
            <div class="list">
                <h3>27 Jun 2077</h3>
                <div class="item loss">
                    <h3>Portofolio</h3>
                    <h2>Rp 44.000.000</h2>
                    <h3>Keuntungan</h3>
                    <h2>- Rp 1.000.000</h2>
                </div>
            <div class="list">
                <h3>2 Jun 2077</h3>
                <div class="item profit">
                    <h3>Portofolio</h3>
                    <h2>Rp 44.000.000</h2>
                    <h3>Keuntungan</h3>
                    <h2>+ Rp 0</h2>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection
