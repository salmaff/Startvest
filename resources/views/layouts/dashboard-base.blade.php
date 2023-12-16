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
                @php
                    $routeName = Route::currentRouteName();
                    $segments = explode('.', $routeName);

                    $currentRoute = $segments[1];
                @endphp
                @switch($currentRoute)
                    @case('main')
                        <a id="active" href="{{ route('dashboard.main') }}">Dashboard</a>
                        <a href="{{ route('dashboard.invest.saldo') }}">Investasi Saya</a>
                        <a href="{{ route('dashboard.riwayat') }}">Riwayat Return</a>
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
                        @break
                    @case('invest')
                        <a href="{{ route('dashboard.main') }}">Dashboard</a>
                        <a id="active" href="{{ route('dashboard.invest.saldo') }}">Investasi Saya</a>
                        <a href="{{ route('dashboard.riwayat') }}">Riwayat Return</a>
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
                        @break
                    @case('riwayat')
                        <a href="{{ route('dashboard.main') }}">Dashboard</a>
                        <a href="{{ route('dashboard.invest.saldo') }}">Investasi Saya</a>
                        <a id="active" href="{{ route('dashboard.riwayat') }}">Riwayat Return</a>
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
                        @break
                    @case('profile')
                        <a href="{{ route('dashboard.main') }}">Dashboard</a>
                        <a href="{{ route('dashboard.invest.saldo') }}">Investasi Saya</a>
                        <a href="{{ route('dashboard.riwayat') }}">Riwayat Return</a>
                        <a id="active" href="{{ route('dashboard.profile.edit') }}">Profil</a>
                        <div class="sub-menu">
                            @switch($segments[2])
                                @case('edit')
                                    <a id="sub-active" href="{{ route('dashboard.profile.edit') }}">Edit Profil</a>
                                    <a href="{{ route('dashboard.profile.password') }}">Ubah Password</a>
                                    <a href="{{ route('dashboard.profile.bank') }}">Bank & Kartu</a>

                                @break
                                @case('password')
                                    <a href="{{ route('dashboard.profile.edit') }}">Edit Profil</a>
                                    <a id="sub-active" href="{{ route('dashboard.profile.password') }}">Ubah Password</a>
                                    <a href="{{ route('dashboard.profile.bank') }}">Bank & Kartu</a>

                                @break
                                @case('bank')
                                    <a href="{{ route('dashboard.profile.edit') }}">Edit Profil</a>
                                    <a href="{{ route('dashboard.profile.password') }}">Ubah Password</a>
                                    <a id="sub-active" href="{{ route('dashboard.profile.bank') }}">Bank & Kartu</a>
                                    @break
                                @default

                            @endswitch
                        </div>
                        <a href="{{ route('dashboard.notif.keuangan') }}">Notifikasi</a>
                        <div class="sub-menu">
                              <a href="{{ route('dashboard.notif.keuangan') }}">Keuangan</a>
                              <a href="{{ route('dashboard.notif.akun') }}">Akun</a>
                        </div>
                        @break
                    @case('notif')
                        <a href="{{ route('dashboard.main') }}">Dashboard</a>
                        <a href="{{ route('dashboard.invest.saldo') }}">Investasi Saya</a>
                        <a href="{{ route('dashboard.riwayat') }}">Riwayat Return</a>
                        <a href="{{ route('dashboard.profile.edit') }}">Profil</a>
                        <div class="sub-menu">
                              <a href="{{ route('dashboard.profile.edit') }}">Edit Profil</a>
                              <a href="{{ route('dashboard.profile.password') }}">Ubah Password</a>
                              <a href="{{ route('dashboard.profile.bank') }}">Bank & Kartu</a>
                        </div>
                        <a id="active" href="{{ route('dashboard.notif.keuangan') }}">Notifikasi</a>
                        <div class="sub-menu">
                            @switch($segments[2])
                                @case('keuangan')
                                    <a id="sub-active" href="{{ route('dashboard.notif.keuangan') }}">Keuangan</a>
                                    <a href="{{ route('dashboard.notif.akun') }}">Akun</a>
                                @break
                                @case('akun')
                                    <a href="{{ route('dashboard.notif.keuangan') }}">Keuangan</a>
                                    <a id="sub-active" href="{{ route('dashboard.notif.akun') }}">Akun</a>
                                    @break
                                @default
                            @endswitch
                        </div>
                        @break
                    @default

                @endswitch
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
