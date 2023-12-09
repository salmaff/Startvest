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
            <h1>Keuntungan</h1>
            <h5>Periksa keuntungan yang kamu dapat dari perusahaan</h5>
            <div class="search-button">
                <input type="text" placeholder="Search...">
                <button type="button">Search</button>
            </div>
            <div class="sub-statistic">

                <div class="isi-konten">
                    <div class="border-container">
                        <div class="gambar-konten">
                            <img src="{{ asset('static/image/cak/logo/logo-hire.png') }}" alt="">
                        </div>
                        <div class="tulisan-konten">
                            <h4>H!re</h4>
                            <p>Temukan pekerjaan impianmu dengan mudah dengan H1ire </p>
                        </div>
                    </div>
                </div>
                <div class="isi-konten">
                    <div class="border-container">
                        <div class="gambar-konten">
                            <img src="{{ asset('static/image/cak/logo/logo-hire.png') }}" alt="">
                        </div>
                        <div class="tulisan-konten">
                            <h4>H!re</h4>
                            <p>Temukan pekerjaan impianmu dengan mudah dengan H1ire </p>
                        </div>
                    </div>
                </div>
                                <div class="isi-konten">
                    <div class="border-container">
                        <div class="gambar-konten">
                            <img src="{{ asset('static/image/cak/logo/logo-hire.png') }}" alt="">
                        </div>
                        <div class="tulisan-konten">
                            <h4>H!re</h4>
                            <p>Temukan pekerjaan impianmu dengan mudah dengan H1ire </p>
                        </div>
                    </div>
                </div>
            </div>

                
            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection
