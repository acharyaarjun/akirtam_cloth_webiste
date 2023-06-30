<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AKIRTAM | CLOTH | WEBSITE</title>

    {{-- fontawesome ko css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}" />

    {{-- bootstrap ko css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">

    {{-- hamro css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}" />
</head>

<body>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sunt cupiditate doloremque, corporis molestias,
        magnam earum optio maxime quis minima suscipit? Distinctio eum rerum temporibus. Omnis magni eligendi fuga
        quasi!
    </p>

    <button onclick="getAlert()" class="btn btn-outline-success"><i class="fa-solid fa-house"></i></button>
    {{-- <button onclick="getAlert()"><i class="fas fa-spa"></i></button> --}}

    <img src="{{ asset('site/image/logo.png') }}" alt="">

    {{-- jquery ko javascript link gareko --}}
    <script src="{{ asset('site/js/jquery.js') }}"></script>

    {{-- bootstrap ko javascript link gareko --}}
    <script src="{{ asset('site/bootstrap/bootstrap.js') }}"></script>

    {{-- fontawesome ko javascript link gareko --}}
    <script src="{{ asset('site/fontawesome/all.js') }}"></script>

    {{-- hamro javascript link gareko --}}
    <script src="{{ asset('site/js/script.js') }}"></script>
</body>

</html>
