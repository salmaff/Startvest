<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('static/css/rizfi/photo-upload.css') }}">
    <link rel="stylesheet" href="{{ url('static/css/rizfi/env.css') }}">
    <title>Photo Upload</title>
</head>
<body>
    <div class="upload-container">
        <div id="cover-container">
            <div id="cover">
                <input type="file" name="photo" id="img-input" accept="image/*">
            </div>
        </div>
        <div class="profile-name">
            Hi, Salma
        </div>
        <div class="profile-caption">
            Please upload your selfie
        </div>
        <a href="/add_credit">
            <div id="skip-button">
                Skip
            </div>
        </a>
    </div>
</body>
<script>
    const cover = document.getElementById('cover')
    const img_input = document.getElementById('img-input')
    let uploaded_img = ''

    console.log(img_input.value)

    img_input.addEventListener('change', function () {
        console.log('Change Image')
        const reader = new FileReader()
        reader.addEventListener('load', (e) => {
            uploaded_img = reader.result
            cover.style.backgroundImage = 'none'
            img_input.style.backgroundImage = `url(${uploaded_img})`
            img_input.style.backgroundSize = 'cover'
        })
        reader.readAsDataURL(this.files[0])
    })
</script>
</html>
