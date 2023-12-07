<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('static/css/rizfi/env.css') }}">
    <link rel="stylesheet" href="{{ url('static/css/rizfi/welcome.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="main-container">
        <div id="img-container">
            <object data="{{ url('static/image/rizfi/welcome.svg') }}" type=""></object>
        </div>
        <div class="caption">
            <h2 class="caption-title">
                Selamat Datang!
            </h2>
            <div class="sub-caption">
                Akun Anda telah terdaftar <br>
                di sistem!
            </div>
            <div class="start-btn">
                Start Explore
            </div>
        </div>
    </div>
</body>
</html>
