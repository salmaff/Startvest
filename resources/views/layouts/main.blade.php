<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/static/css/navbar-style.css') }}">
    <link rel="stylesheet" href="{{ url('/static/css/env-rizfi.css') }}">
</head>
<body>
    @section('navbar')
    <div class="nav">
        <nav>
            <div class="nav-container">
                <div class="link-container">
                    <div class="logo">
                        <object data="{{ url('/static/image/logo.svg') }}" type=""></object>
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
</body>
</html>
