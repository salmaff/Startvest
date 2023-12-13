@extends('layouts.dashboard-base')

@section('css')
    <link rel="stylesheet" href="{{ asset('static/css/cak/content/profile/bank.css') }}">
@endsection

@section('title')
    Bank & Kartu
@endsection

@section('main-content')
    {{-- Heading --}}
    <div class="heading">
        <div class="headline">
            <h1>Kartu Kredit / Debit</h1>
            <h5>Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</h5>
        </div>
    </div>

    <hr>

    {{-- Content --}}
    <div class="content">
        <div class="list">
            <div class="list-item">
                <img src="{{ asset('static/image/cak/Visa.png') }}" alt="">
                <div class="text">
                    <h4>VISA <span>**3015</span></h4>
                    <h5>Expires: 09/2025</h5>
                    <h4>(Default)</h4>
                </div>
                <a href=""><h5>Hapus</h5></a>
            </div>
        </div>
        <button class="btn-primary">
            Tambah
        </button>
    </div>

@endsection

@section('js')

@endsection
