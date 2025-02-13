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
    <footer class="container-fluid bg-beige">

    </footer>
</body>

</html>
