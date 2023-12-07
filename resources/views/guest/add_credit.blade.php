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
    <link rel="stylesheet" href="{{ url('static/css/rizfi/add_credit.css') }}">
    <title>Add Credit Card</title>
</head>
<body>
    <div class="main-container">
        <div class="image-container"></div>
        <div class="inputs-container">
            <h2>Tambahkan Kartu</h2>
            <div class="input-container">
                <div class="input-container">
                    <div class="input">
                        <label for="nomor">Nomor Kartu</label>
                        <input name="nomor" required type="text" placeholder="1234 5678 9012 4567">
                    </div>
                    <div class="input">
                        <label for="date">Masa Berlaku</label>
                        <input name="date" requried type="text" placeholder="MM / YY">
                    </div>
                    <div class="input">
                        <label for="security">Security Code</label>
                        <input name="security" required type="text" placeholder="123">
                    </div>
                </div>
                <a href="/signup/photo">
                    <div class="next-button">
                        Lanjutkan
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
