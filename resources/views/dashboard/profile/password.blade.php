@extends('layouts.dashboard-base')

@section('css')
    <link rel="stylesheet" href="{{ asset('static/css/cak/content/profile/password.css') }}">
@endsection

@section('title')
    Ubah Password
@endsection

@section('main-content')
    {{-- Heading --}}
    <div class="heading">
        <div class="headline">
            <h1>Ubah Password</h1>
            <h5>Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</h5>
        </div>
    </div>

    <hr>

    {{-- Content --}}
    <div class="content">
        <form action="">
            <div class="form-group">
                <label for="oldpass">Password Lama</label><input type="password">
            </div>
            <div class="form-group">
                <label for="newpass">Password Baru</label><input type="password">
            </div>
            <div class="form-group">
                <label for="newpass2">Konfirmasi Password Baru </label><input type="password">
            </div>
            <button class="btn-primary">
                Simpan
            </button>
        </form>
    </div>

@endsection

@section('js')

@endsection
