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
              <a href="{{ route('dashboard.main') }}">Dashboard</a>
              <a href="{{ route('dashboard.invest.detail') }}">Investasi Saya</a>
              <a href="{{ route('dashboard.profile.riwayat') }}">Riwayat Return</a>
              <a href="{{ route('dashboard.profile.edit') }}">Profil</a>
              <div class="sub-menu">
                    <a href="{{ route('dashboard.profile.edit') }}">Edit Profil</a>
                    <a href="{{ route('dashboard.profile.password') }}">Ubah Password</a>
                    <a href="{{ route('dashboard.profile.bank') }}">Bank & Kartu</a>
              </div>
              <a href="{{ route('dashboard.notif.keuangan') }}">Notifikasi</a>
              <div class="sub-menu">
                    <a href="{{ route('dashboard.notif.keuangan') }}">Keuangan</a>
                    <a href="{{ route('dashboard.notif.akun') }}">Akun</a>
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
