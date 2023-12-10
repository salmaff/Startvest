<link rel="stylesheet" href="{{ url('static/css/anggun/payment-style.css') }}">

@extends('layouts.main')

@section('main-content')
    <div class="gallery">
        <div class="thumbnail-container">
            <object data="{{ url("static\image\anggun\Thumbnail Image.svg") }}" type=""></object>
        </div> <br>
        <div class="gallery-container">
            <object data="{{ url("static\image\anggun\Screenshot Image.svg") }}" type=""></object>
        </div>
        <div class="proj-title">
            Wireboard Fortune
        </div>
        <div class="title">
            Fund Now
        </div>
    </div>
    <div class="nominal-container">
        <div class="option-container">
            <div class="option">
                <div class="amount">Rp 10.000.000,00</div>
            </div>
            <div class="option">
                <div class="amount">Rp 20.000.000,00</div>
            </div>
            <div class="option">
                <div class="amount">Rp 30.000.000,00</div>
            </div>
            <div class="option">
                <div class="amount">Rp 40.000.000,00</div>
            </div>
            <div class="other-opt">
                <div class="amount">Other amount</div>
            </div>
        </div>
        <div class="fund-act">
            Fund
        </div>
    </div>
@endsection