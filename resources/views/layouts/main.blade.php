<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Home</title>

    <style>
        .dropdown-content:before {
            position: absolute;
            content: '';
            height: 14px;
            width: 14px;
            background: white;
            right: 28.7px;
            top: -0.45em;
            transform: rotate(45deg);
            z-index: -1;
        }

        @media only screen and (max-width: 600px) {
            .dropdown-content:before {
                position: absolute;
                content: '';
                height: 14px;
                width: 14px;
                background: white;
                right: 53px;
                top: -0.45em;
                transform: rotate(45deg);
                z-index: -1;
            }
            .dropdown-content {
                left: 0;
            }
        }
    </style>
</head>
<body class="bg-slate-800">

    @include('homepage.navbar')

    @yield('content')

    @include('homepage.footer')

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
</body>
</html>