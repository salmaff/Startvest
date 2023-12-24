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
    <link rel="stylesheet" href="{{ url('static/css/rizfi/signin-style.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
    <title>Sign Up</title>
</head>
<body>
    <div class="signup-container">
        <div class="image-container">
            {{-- <img src="{{ url('static/image/rizfi/signup-img.png') }}" alt=""> --}}
        </div>
        <div class="inputs-container">
            <div class="auth-error">
                <div class="error-caption">
                    Maaf, Anda belum masuk
                </div>
                {{-- <div class="error-icon"> --}}
                    <iconify-icon class="error-icon" icon="material-symbols:cancel-outline" style="color: #ff872e;" width="40" height="40"></iconify-icon>
                {{-- </div> --}}
            </div>
            <h2>Masuk ke Akunmu</h2>
            <div class="input-container">
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
            <a href="{{ route("auth.landing") }}">
                <div class="next-button">
                    Sign In
                </div>
            </a>
            <div class="login-caption">
                Tidak punya akun <a href="/signup">Sign Up</a>
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

        const errorIcon = document.querySelector(".error-icon")
        const errorCaption = document.querySelector(".auth-error")
        errorIcon.addEventListener("click", (e)=>{
            errorCaption.style.display = "none"
        })
    </script>
</body>
</html>
