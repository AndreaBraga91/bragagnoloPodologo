<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="{{ Vite::asset('resources/images/logoAB.svg') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>studio podologico AB</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js'])

</head>

<body class="overflow-x-hidden">
    <div class="loader" style="height: 100vh; width: 100vw; background-color: rgb(193, 186, 176); position: fixed; top:0; left:0;"></div>
    <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <a href="/" class="nav-logo fixed-top">
        <img src="{{ Vite::asset('resources/images/logoAB.svg') }}" alt="" class="img-fluid">
    </a>
    <nav class="container-fluid bg-beige">
        <div class="text-grey container-fluid">
            <div class="row vh-100 align-items-center">
                <div class="col-12">
                    <div class="text-center display-2"><a class="navbar-link" href="/">HOME</a></div>
                    <div class="text-center display-2"><a class="navbar-link" href="/patologie">PATOLOGIE</a></div>
                    <div class="text-center display-2"><a class="navbar-link" href="./chi-sono">CHI SONO</a></div>
                    <div class="text-center display-2"><a class="navbar-link" href="./lo-studio">LO STUDIO</a></div>
                    <div class="text-center display-2"><a class="navbar-link" href="./contatti">CONTATTI</a></div>
                </div>
            </div>
        </div>
    </nav>
    <main class="bg-beige container-fluid overflow-x-hidden" {{ $attributes }}>
        {{ $slot }}
    </main>
    <footer class="container-fluid bg-beige pt-3">
        <div class="row justify-content-center">
            <a href="/" class="col-12 d-flex justify-content-center">
                <img src="{{ Vite::asset('resources/images/logoAB.svg') }}" alt="" class="footer-logo">
            </a>
            <div class="col-12 col-md-2 d-flex justify-content-center">
                <div class="py-2"><a class="navbar-link" href="/">HOME</a></div>
            </div>
            <div class="col-12 col-md-2 d-flex justify-content-center">
                <div class="py-2"><a class="navbar-link" href="/patologie">PATOLOGIE</a></div>
            </div>
            <div class="col-12 col-md-2 d-flex justify-content-center">
                <div class="py-2"><a class="navbar-link" href="./chi-sono">CHI SONO</a></div>
            </div>
            <div class="col-12 col-md-2 d-flex justify-content-center">
                <div class="py-2"><a class="navbar-link" href="./lo-studio">LO STUDIO</a></div>
            </div>
            <div class="col-12 col-md-2 d-flex justify-content-center">
                <div class="py-2"><a class="navbar-link" href="./contatti">CONTATTI</a></div>
            </div>
            <div class="col-8 col-md-4 my-5  p-4 text-center personal-data">
                Andrea Bragagnolo PIVA: 000000000</br>Via Amerigo Vespucci, 9</br>20025 Legnano (MI)
            </div>
        </div>
    </footer>
</body>

</html>
