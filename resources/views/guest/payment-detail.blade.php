<link rel="stylesheet" href="{{ url('static/css/anggun/payment-detail-style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@extends('layouts.main')

@section('main-content')
    <div class="det-card">
        <div class="dtc">
            <div class="det-title">
                Detail Pemesanan
            </div>
            <div class="det-subtitle">
                Nama StartUp
            </div>
            <div class="det-sub2title">
                HaloDoc
            </div>
        </div>
        <div class="center-card">
            <div class="acctype">
                Mandiri Virtual Account
            </div>
            <div class="accnum">
                <div class="accnumtxt">
                8878012345678912
                </div>
                <i class="fas fa-copy"></i>
            </div>
            <div class="tot">
                Total Pembayaran
            </div>
            <div class="totnum">
                <div class="totnumtxt">
                    Rp 20.000.012
                </div>
                <i class="fas fa-copy"></i>
            </div>
        </div>
    </div>
@endsection