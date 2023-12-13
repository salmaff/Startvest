@extends('layouts.dashboard-base')

@section('css')
    <link rel="stylesheet" href="{{ asset('static/css/cak/content/notif/akun.css') }}">
@endsection

@section('title')
    Notifikasi
@endsection

@section('main-content')
    {{-- Heading --}}
    <div class="heading">
        <div class="headline">
            <h1>Notifikasi Akun</h1>
            <h5>Lihat informasi terbaru terkait akun Anda</h5>
        </div>
    </div>

    <hr>

    {{-- Content --}}
    <div class="content">
        <div class="wrapper">
            <img src="" alt="">
            <div class="text">
                <h5>Update Foto Profil</h5>
                <p>Foto profil Anda berhasil di-update. Lihat di sini.</p>
                <p>29 Aug 2023 19:00</p>
            </div>
            <a class="btn-secondary">Tampilkan Rincian</a>
        </div>
        <div class="wrapper">
            <img src="" alt="">
            <div class="text">
                <h5>Update Kata Sandi</h5>
                <p>Kata sandi Anda baru saja di-update. Abaikan pesan ini jika benar Anda.</p>
                <p>12 Aug 2023 08:20</p>
            </div>
            <a class="btn-secondary">Tampilkan Rincian</a>
        </div>
        <div class="wrapper">
            <img src="" alt="">
            <div class="text">
                <h5>Kartu Ditambahkan</h5>
                <p>Kata sandi Anda baru saja di-update. Abaikan pesan ini jika benar Anda.</p>
                <p>1 Aug 2023 20:04</p>
            </div>
            <a class="btn-secondary">Tampilkan Rincian</a>
        </div>
    </div>

@endsection

@section('js')

@endsection
