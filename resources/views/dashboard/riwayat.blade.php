@extends('layouts.dashboard-base') @section('css')
<link
    rel="stylesheet"
    href="{{ asset('static/css/cak/content/riwayat.css') }}"
/>
@endsection @section('title') Riwayat Return @endsection
@section('main-content')

{{-- Heading --}}
<div class="heading">
    <div class="headline">
        <h1>Riwayat Return</h1>
        <h5>Lihat penarikan return dari profitmu</h5>
    </div>
    <a href="" class="profile">
        <img src="{{ asset('static/image/cak/pfp.png') }}" alt="" />
        <div class="profile-text">
            <h4>Cakra</h4>
            <h6>UX Designer</h6>
        </div>
    </a>
</div>

{{-- Content --}}
<div class="content">
    <button class="filter">
        <img src="{{ asset('static/image/cak/icon/filter.svg') }}" alt="" />
        <p>Filter</p>
    </button>
    <div id="filter-card">
        <div class="filter-name">
            <div class="startup-name active">Filter</div>
            <div class="drop-icon">
                <iconify-icon
                    icon="fa6-solid:v"
                    width="10"
                    height="12"
                    style="
                        color: black;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    "
                ></iconify-icon>
            </div>
        </div>
        <div class="filter-name">
            <div class="startup-name">Hire</div>
            <div class="drop-icon">
                <iconify-icon
                    icon="fa6-solid:v"
                    width="10"
                    height="12"
                    style="
                        color: black;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    "
                ></iconify-icon>
            </div>
        </div>
        <div class="filter-name">
            <div class="startup-name">Skole</div>
            <div class="drop-icon">
                <iconify-icon
                    icon="fa6-solid:v"
                    width="10"
                    height="12"
                    style="
                        color: black;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    "
                ></iconify-icon>
            </div>
        </div>
        <div class="filter-name">
            <div class="startup-name">Fire</div>
            <div class="drop-icon">
                <iconify-icon
                    icon="fa6-solid:v"
                    width="10"
                    height="12"
                    style="
                        color: black;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    "
                ></iconify-icon>
            </div>
        </div>
    </div>
    <div class="wrapper-container">
        <div class="wrapper">
            <img
                src="{{ asset('static/image/cak/logo/logo-hire.png') }}"
                alt=""
            />
            <div class="text">
                <p>Aug 2023</p>
                <h2>H!re</h2>
            </div>
            <h3>Returns</h3>
            <h2>- Rp 1.000.000</h2>
        </div>
        <div class="wrapper">
            <img
                src="{{ asset('static/image/cak/logo/logo-fire.png') }}"
                alt=""
            />
            <div class="text">
                <p>Aug 2023</p>
                <h2>F!re</h2>
            </div>
            <h3>Returns</h3>
            <h2>- Rp 2.000.000</h2>
        </div>
        <div class="wrapper">
            <img
                src="{{ asset('static/image/cak/logo/logo-skola.png') }}"
                alt=""
            />
            <div class="text">
                <p>Aug 2023</p>
                <h2>Skola</h2>
            </div>
            <h3>Returns</h3>
            <h2>- Rp 3.000.000</h2>
        </div>
        <div class="wrapper">
            <img
                src="{{ asset('static/image/cak/logo/logo-hire.png') }}"
                alt=""
            />
            <div class="text">
                <p>Aug 2023</p>
                <h2>H!re</h2>
            </div>
            <h3>Returns</h3>
            <h2>- Rp 1.000.000</h2>
        </div>
        <div class="wrapper">
            <img
                src="{{ asset('static/image/cak/logo/logo-fire.png') }}"
                alt=""
            />
            <div class="text">
                <p>Aug 2023</p>
                <h2>F!re</h2>
            </div>
            <h3>Returns</h3>
            <h2>- Rp 2.000.000</h2>
        </div>
    </div>
</div>

@endsection @section('js')
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script>
    const histories = document.querySelectorAll(".text > h2");

    //Get All Start Up Name
    var startups = [];
    histories.forEach((ele) => {
        if (!startups.includes(ele.innerHTML)) {
            startups.push(ele.innerHTML);
        }
    });

    console.log(startups);
</script>
@endsection
