<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('static/css/cak/env.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/cak/sidebar.css') }}">
    @yield('css')
    <title>
        @yield('title') | StarVest
    </title>
</head>
<body>
    <div class="root">
        {{-- Side Bar --}}
        <nav class="sidebar">
            <img src="{{ asset('static/image/rizfi/logo.svg') }}" alt="" />
            <div class="main-menu">
              <a href="">Dashboard</a>
              <a href="">Investasi Saya</a>
              <a href="">Riwayat Return</a>
              <a href="">Profil</a>
              <div class="sub-menu">
                    <a href="">Edit Profil</a>
                    <a href="">Ubah Password</a>
                    <a href="">Bank & Kartu</a>
              </div>
              <a href="">Notifikasi</a>
              <div class="sub-menu">
                    <a href="">Keuangan</a>
                    <a href="">Akun</a>
              </div>
              <a href="" class="sign-out">Sign Out</a>
            </div>
        </nav>

        {{-- Content --}}
        <div class="main-content">
            @yield('main-content')
        </div>

        {{-- JS --}}
        @yield('js')
    </div>
</body>
</html>
