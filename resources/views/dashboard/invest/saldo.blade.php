@extends('layouts.dashboard-base')

@section('css')
    <link rel="stylesheet" href="{{ asset('static/css/cak/content/invest/saldo.css') }}">
@endsection

@section('title')
    Dashboard
@endsection

@section('main-content')

    {{-- Heading --}}
    <div class="heading">
        <div class="headline">
            <h1>Saldo</h1>
            <h5>Lihat banyaknya semua saldomu</h5>
        </div>
        <a href="" class="profile">
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
            <div class="image-container">
                <img src="{{ asset('static/image/cak/logo/input-saldo.png') }}" alt="Your Image">
                <div class="image-overlay">
                    <p>Rp 625.872.541,00</p>
                </div>
            </div>
            <div class="keuntungan">
                <h1>Keuntungan</h1>
                <div class="sub-judul">
                    <h5>Periksa keuntungan yang kamu dapat dari perusahaan</h5>
                    <form action="">
                        <div class="search-button">
                            <input type="search" placeholder="Search...">
                            <button type="submit">
                                <img src="{{ asset('static/image/cak/icon/search.svg') }}" alt="">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="list-wrapper">
                <div class="list-item">
                    <img src="{{ asset('static/image/cak/logo/logo-hire.png') }}" alt="">
                    <div class="tulisan-konten">
                        <h4>H!re</h4>
                        <p>Temukan pekerjaan impianmu dengan mudah dengan H!ire</p>
                    </div>
                </div>
                <div class="list-item">
                    <img src="{{ asset('static/image/cak/logo/logo-fire.png') }}" alt="">
                    <div class="tulisan-konten">
                        <h4>f!re</h4>
                        <p>Sudahi pekerjaanmu dengan cara yang menakjubkan</p>
                    </div>
                </div>
                <div class="list-item">
                    <img src="{{ asset('static/image/cak/logo/logo-skola.png') }}" alt="">
                    <div class="tulisan-konten">
                        <h4>Skola</h4>
                        <p>Belajar dimanapun dan kapanpun dengan yang lain</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection
