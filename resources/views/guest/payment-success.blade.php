<link rel="stylesheet" href="{{ url('static/css/anggun/payment-success-style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@extends('layouts.main')

@section('main-content')
    <div class="succ-card">
        <div class="succ-head">
            <div class="succ-date">
                10 Okt 2023 - 23:45 WIB
            </div>
            <div class="succ-user">
                Ayub Fahri
            </div>
        </div>
        <hr class="succ-line">
        <div class="succ-stat">
            <i class="far fa-check-circle"></i>
            <div class="succ-stat-txt">
                Transaksi Sukses!
            </div>
        </div>
        <div class="succ-title">
            HaloDoc
        </div>
        <div class="succ-pay">
            <div class="sptxt">
                Total Pembayaran
            </div>
            <div class="spnom">
                Rp 20.000.012
            </div>
        </div>
        <div class="succ-method">
            <div class="smtxtl">
                Metode Pembayaran
            </div>
            <div class="smtxtr">
                Mandiri Virtual Account
            </div>
        </div>
        <div class="succ-method">
            <div class="smtxtl">
                Nomor Referensi
            </div>
            <div class="smtxtr">
                745774577457
            </div>
        </div>
    </div>
@endsection