@extends('layouts.dashboard-base')

@section('css')
    <link rel="stylesheet" href="{{ asset('static/css/cak/content/notif/rincian.css') }}">
@endsection

@section('title')
    Notifikasi
@endsection

@section('main-content')
    {{-- Heading --}}
    
    <div class="heading">
        <div class="headline">
            <button class="btn-back">
                <h5><img src="{{ asset('static/image/cak/icon/tombol-back.svg') }}" alt="Back"> Kembali</h5>
            </button>
        </div>
    </div>

    <hr>

    {{-- Content --}}
    <div class="content">
        <div class="wrapper">
            <img src="" alt="">
            <div class="text">
                <h5>Investasi berhasil dilakukan</h5>
                <p>Nomor Referensi : 745774577457</p>
                <p>Nomor Metode Pembayaran : Mandiri Virtual Account</p>
                <p>Total Tagihan : Rp 20.000.012</p>
                <p>10 Okt 2023 - 23:45</p>
            </div>
            <a class="btn-secondary">Lihat di Dashboard</a>
        </div>
       
    </div>

@endsection

@section('js')

@endsection
