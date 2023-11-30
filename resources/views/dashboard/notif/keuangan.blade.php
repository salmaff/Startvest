@extends('layouts.dashboard-base')

@section('css')
    <link rel="stylesheet" href="{{ asset('static/css/cak/content/notif/keuangan.css') }}">
@endsection

@section('title')
    Notifikasi
@endsection

@section('main-content')
    {{-- Heading --}}
    <div class="heading">
        <div class="headline">
            <h1>Notifikasi Keuangan</h1>
            <h5>Lihat informasi terbaru terkait investasi dan keuangan Anda</h5>
        </div>
    </div>

    <hr>

    {{-- Content --}}
    <div class="content">
        <div class="wrapper">
            <img src="{{ asset('static/image/cak/logo/logo-hire.png') }}" alt="">
            <div class="text">
                <h5>Investasi Berhasil Dilakukan</h5>
                <p>Pembayaran investasi 745774577457 berhasil dilakukan. Cek rinciannya di sini.</p>
                <p>29 Aug 2023 19:00</p>
            </div>
            <a class="btn-secondary">Tampilkan Rincian</a>
        </div>
        <div class="wrapper">
            <img src="{{ asset('static/image/cak/logo/logo-fire.png') }}" alt="">
            <div class="text">
                <h5>Investasi Berhasil Dilakukan</h5>
                <p>Pembayaran investasi 745774577457 berhasil dilakukan. Cek rinciannya di sini.</p>
                <p>29 Aug 2023 19:00</p>
            </div>
            <a class="btn-secondary">Tampilkan Rincian</a>
        </div>
        <div class="wrapper">
            <img src="{{ asset('static/image/cak/logo/logo-skola.png') }}" alt="">
            <div class="text">
                <h5>Investasi Berhasil Dilakukan</h5>
                <p>Pembayaran investasi 745774577457 berhasil dilakukan. Cek rinciannya di sini.</p>
                <p>29 Aug 2023 19:00</p>
            </div>
            <a class="btn-secondary">Tampilkan Rincian</a>
        </div>
    </div>

@endsection

@section('js')

@endsection
