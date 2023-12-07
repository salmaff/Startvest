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
    <link rel="stylesheet" href="{{ url('static/css/rizfi/signup-style.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
    <title>Sign Up</title>
</head>
<body>
    <div class="signup-container">
        <div class="image-container">
            {{-- <img src="{{ url('static/image/rizfi/signup-img.png') }}" alt=""> --}}
        </div>
        <div class="inputs-container">
            <h2>Daftar Sekarang!</h2>
            <div class="input-container">
                <div class="input">
                    <label for="name">Nama Lengkap</label>
                    <input name="name" required type="text" placeholder="Masukkan nama lengkap Anda">
                </div>
                <div class="input">
                    <label for="job">Pekerjaan</label>
                    <input name="job" requried type="text" placeholder="Masukkan pekerjaan Anda">
                </div>
                <div class="input">
                    <label for="email">Alamat Email</label>
                    <input name="email" required type="email" placeholder="Masukkan alamat email anda">
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <div id="password-input">
                        <input name="password" required type="password" placeholder="Masukkan password Anda">
                        <div id="eye-icon">
                            <iconify-icon icon="ph:eye-fill" style="color: #222;" width="20" height="20"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/signup/photo">
                <div class="next-button">
                    Lanjutkan
                </div>
            </a>
            <div class="login-caption">
                Sudah punya akun? <a href="/signin">Sign In</a>
            </div>
        </div>
    </div>

    <script>
        //password input
        const pwEle = document.querySelector('#password-input')
        const pwInput = document.querySelector('input[type="password"]')
        const focusedStyle = "border: 1px solid #8286ff; background: #4c52f8; color: #fff; border-style: none; outline: none; outline-offset: 0;"
        pwInput.addEventListener('focus', (e) => {
            pwEle.style = focusedStyle
        })

        pwInput.addEventListener('blur', (e) => {
            pwEle.style.backgroundColor = 'white'
        })

        //password toggle
        const showBtn = document.querySelector('#eye-icon')
        const eyeIcon = document.querySelector('#eye-icon iconify-icon')
        let isShowed = false
        console.log(eyeIcon);
        showBtn.addEventListener('click', (e) => {
            const type = pwInput.getAttribute("type") === "password" ? "text" : "password"
            const icon = pwInput.getAttribute("type") === "password" ? "ph:eye-slash-fill" : "ph:eye-fill"
            pwInput.setAttribute("type", type)

            eyeIcon.setAttribute("icon", icon)
        })
    </script>
</body>
</html>
