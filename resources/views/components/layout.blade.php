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
                <div class="py-2"><a class="navbar-link" href="/chi-sono">CHI SONO</a></div>
            </div>
            <div class="col-12 col-md-2 d-flex justify-content-center">
                <div class="py-2"><a class="navbar-link" href="/lo-studio">LO STUDIO</a></div>
            </div>
            <div class="col-12 col-md-2 d-flex justify-content-center">
                <div class="py-2"><a class="navbar-link" href="/contatti">CONTATTI</a></div>
            </div>
            <div class="col-8 col-md-4 my-5  p-4 text-center personal-data">
                <p>Andrea Bragagnolo PIVA: 03462770128</p>
                <p>Via Amerigo Vespucci, 9</p>
                <p>20025 Legnano (MI)</p>
                <a class="link fw-semibold mx-2" href="tel:+393474960371">+39 347 4960371</a>
                <span>|</span>
                <a class="link fw-semibold mx-2" href="mailto:info@podologobragagnolo.it">info@podologobragagnolo.it</a>
                <a class="mt-2" href="https://wa.me/393474960371">
                    <img src="{{ Vite::asset('resources/images/WhatsAppButtonWhiteSmall.svg') }}" alt="chat on whatsApp" class="whatsapp">
                </a>
                <div>
                    <span class="mx-2 footer-link">informazioni legali</span> <span>|</span> <span class="mx-2 footer-link">Privacy Policy e Cookie Policy</span>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="cookie-policy" tabindex="-1" role="dialog" aria-labelledby="cookie policy" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
</body>

</html>
