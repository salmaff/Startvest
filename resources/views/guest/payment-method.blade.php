<link rel="stylesheet" href="{{ url('static/css/anggun/payment-method-style.css') }}">
<script src="static/js/anggun/payment-method-script.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@extends('layouts.main')

@section('main-content')
    <div class="meth-card">
        <div class="meth-left-img">
            <img src="/static/image/anggun/image 17.png"/>
        </div>
        <div class="meth-container">
            <div class="meth-title">
                Metode Pembayaran
            </div>
            <div class="meth-opt">
                <div class="first-opt">
                    <input type="radio" class="myCard" name="payment" checked>
                    <label for="myCard" class="radio-label">My Card</label>
                    <div class="meth-card-container">
                        <object data="{{ url('/static/image/anggun/dinersclub.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/visa.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/amex.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/mastercard.svg') }}" type=""></object>
                    </div>
                </div>
                <div class="second-opt">
                    <input type="radio" class="virtualAccount" name="payment">
                    <label for="virtualAccount" class="radio-label" onclick="toggleBankOptions()">
                        <div class="va-txt">Virtual Account</div>
                        <i class="fas fa-chevron-down" id="chevron-icon"></i>
                    </label>
                    <div class="vadesc">
                        Choose the option you wish to use
                    </div>
                    <div class="meth-bank-opt">
                        <object data="{{ url('/static/image/anggun/mandiri.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/bri.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/bca.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/bni.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/bukopin.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/cimb.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/danamon.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/digibank.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/hsbc.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/jenius.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/jcb.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/panin.svg') }}" type=""></object>
                        <object data="{{ url('/static/image/anggun/permata.svg') }}" type=""></object>
                    </div>
                </div>
            </div>
            <button class="meth-finpay">
                Bayar
            </button>
        </div>
    </div>
@endsection