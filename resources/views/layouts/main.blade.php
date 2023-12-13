<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/static/css/rizfi/navbar-style.css') }}">
    <link rel="stylesheet" href="{{ url('/static/css/rizfi/footer-style.css') }}">
    <link rel="stylesheet" href="{{ url('/static/css/rizfi/env.css') }}">
    <title>
        @yield('title') | Startvest
    </title>
</head>
<body>
    @section('navbar')
    <div class="nav">
        <nav>
            <svg class="navbar-bg" xmlns="http://www.w3.org/2000/svg" width="1920" height="600" viewBox="0 0 1920 600" fill="none">
                <path d="M0 0H1920V495.238L0 600V0Z" fill="#3B41E3"/>
            </svg>
            <div class="nav-container">
                <div class="link-container">
                    <div class="logo">
                        <object data="{{ url('/static/image/rizfi/logo.svg') }}" type=""></object>
                    </div>
                    <ul class="links">
                        <li>Home</li>
                        <li>Project</li>
                        <li>Dashboard</li>
                    </ul>
                </div>
                <div class="button-container">
                    <div id="user-signup">
                        Daftar
                    </div>
                    <div id="my-account">
                        Akun Saya
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="main-content">
        @yield('main-content')
    </div>
    <div class="footer">
        <footer>
            <svg class="footer-bg" xmlns="http://www.w3.org/2000/svg" width="1920" height="889" viewBox="0 0 1920 889" fill="none">
                <path d="M0 889H1920V114.071L0 -1.97291e-05V889Z" fill="#3B41E3"/>
              </svg>
            <div class="footer-container">
                <div class="footer-content">
                    <h1 class="tagline">
                        Cara mudah untuk mendanai <br> ide dan inovasi terbaik
                    </h1>
                    <div class="start-btn">
                        Mulai
                    </div>
                </div>
                <div class="footer-link-contents">
                    <div class="profile">
                        <div class="name-profile">
                            <div class="logo">
                                <object data="{{ url('/static/image/rizfi/logo.svg') }}" type=""></object>
                            </div>
                            <div class="name">
                                StartVest
                            </div>
                        </div>
                        <div class="desc">
                            Helps people execute their <br> bright ideas
                        </div>
                    </div>
                    <div class="links-content">
                        <div class="discover">
                            <div class="header">
                                Jelajahi
                            </div>
                            <ul class="header-contents">
                                <li>Layanan Kami</li>
                                <li>Sistem Ekuitas</li>
                                <li>Pengembalian Dana</li>
                                <li>Shareholder</li>
                            </ul>
                        </div>
                        <div class="investor">
                            <div class="header">
                                Investor
                            </div>
                            <ul class="header-contents">
                                <li>Akun Saya</li>
                                <li>Startups Terbaik</li>
                                <li>Tutorial</li>
                                <li>Withdrawal</li>
                            </ul>
                        </div>
                        <div class="office">
                            <div class="header">
                                Office
                            </div>
                            <ul class="header-contents">
                                <li>+021 2208 1996</li>
                                <li>KBP, Bandung</li>
                                <li>No.12 (Backer)</li>
                                <li>support@backer.id</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
