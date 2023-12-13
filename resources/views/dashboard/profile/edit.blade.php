@extends('layouts.dashboard-base')

@section('css')
    <link rel="stylesheet" href="{{ asset('static/css/cak/content/profile/edit.css') }}">
@endsection

@section('title')
    Edit Profil
@endsection

@section('main-content')
    {{-- Heading --}}
    <div class="heading">
        <div class="headline">
            <h1>Edit Profil</h1>
            <h5>Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</h5>
        </div>
    </div>

    <hr>

    {{-- Content --}}
    <div class="content">
        <div class="pfp">
            <img src="{{ asset('static/image/cak/pfp2.png') }}" alt="">
            <button class="btn-primary">Pilih Gambar</button>
            <h6>Ukuran gambar: maks. 1 MB</h6>
            <h6>Format gambar: .JPEG, .PNG</h6>
        </div>
        <form action="">
            <div class="form-group">
                <label for="username">Username</label><input type="text">
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label><input type="text">
            </div>
            <div class="form-group">
                <label for="email">Email</label><input type="email">
            </div>
            <div class="form-group">
                <label for="telp">Nomor Telepon</label><input type="text">
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label><input type="text">
            </div>
            <button class="btn-primary">
                Simpan
            </button>
        </form>
    </div>

@endsection

@section('js')

@endsection
