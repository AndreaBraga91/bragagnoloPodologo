<!doctype html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="{{ Vite::asset('resources/images/logoAB.svg') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>{{ $title ?? 'Studio Podologico AB - Dr. Bragagnolo Andrea | Podologo a Legnano' }}</title>
    <meta name="description" content="{{ $description ?? 'Studio podologico specializzato nel trattamento di patologie del piede. Servizi professionali di podologia a Legnano con il Dr. Bragagnolo Andrea.' }}">
    <meta name="author" content="Dr. Bragagnolo Andrea">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $ogTitle ?? $title ?? 'Studio Podologico AB - Dr. Bragagnolo Andrea' }}">
    <meta property="og:description" content="{{ $ogDescription ?? $description ?? 'Studio podologico specializzato nel trattamento di patologie del piede. Servizi professionali di podologia a Legnano.' }}">
    <meta property="og:image" content="{{ $ogImage ?? Vite::asset('resources/images/logoAB.svg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $ogTitle ?? $title ?? 'Studio Podologico AB - Dr. Bragagnolo Andrea' }}">
    <meta property="twitter:description" content="{{ $ogDescription ?? $description ?? 'Studio podologico specializzato nel trattamento di patologie del piede. Servizi professionali di podologia a Legnano.' }}">
    <meta property="twitter:image" content="{{ $ogImage ?? Vite::asset('resources/images/logoAB.svg') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="aac44f96-0881-4372-b0db-0295c737f75d" data-blockingmode="auto" type="text/javascript"></script>
    @vite(['resources/js/app.js'])

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MedicalBusiness",
        "name": "Studio Podologico AB - Dr. Bragagnolo Andrea",
        "image": "{{ Vite::asset('resources/images/logoAB.svg') }}",
        "@id": "{{ url('/') }}",
        "url": "{{ url('/') }}",
        "telephone": "+39 PHONE_NUMBER",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "20025",
            "addressLocality": "Legnano",
            "postalCode": "YOUR_POSTAL_CODE",
            "addressCountry": "IT"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 45.59620827107636,
            "longitude": 8.921025676112418
        },
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "09:00",
                "closes": "18:00"
            }
        ],
        "priceRange": "€€"
    }
    </script>
</head>

<body class="overflow-x-hidden">
    <div class="loader"
        style="height: 100vh; width: 100vw; background-color: rgb(193, 186, 176); position: fixed; top:0; left:0;">
    </div>
    <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <a href="/" class="nav-logo fixed-top">
        <img src="{{ Vite::asset('resources/images/logoAB.svg') }}" alt="Studio Podologico AB - Dr. Bragagnolo Andrea Logo" class="img-fluid">
    </a>
    <nav class="container-fluid bg-beige">
        <div class="text-grey container-fluid">
            <div class="row vh-100 align-items-center">
                <div class="col-12">
                    <div class="text-center display-2"><a class="navbar-link" href="/">HOME</a></div>
                    <div class="text-center display-2"><a class="navbar-link" href="/patologie">PATOLOGIE</a></div>
                    <div class="text-center display-2"><a class="navbar-link" href="/chi-sono">CHI SONO</a></div>
                    <div class="text-center display-2"><a class="navbar-link" href="/lo-studio">LO STUDIO</a></div>
                    <div class="text-center display-2"><a class="navbar-link" href="/contatti">CONTATTI</a></div>
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
                <p>Corso Sempione, 119</p>
                <p>20025 Legnano (MI)</p>
                <a class="link fw-semibold mx-2" href="tel:+393408490061">+39 340 8490061</a>
                <span>|</span>
                <a class="link fw-semibold mx-2" href="mailto:dottbragagnolo@gmail.com">dottbragagnolo@gmail.com</a>
                <a class="mt-2" href="https://wa.me/393408490061">
                    <img src="{{ Vite::asset('resources/images/WhatsAppButtonWhiteSmall.svg') }}" alt="chat on whatsApp"
                        class="whatsapp">
                </a>
                <div>
                    <button type="button" class="btn-foot" data-bs-toggle="modal"
                        data-bs-target="#informazioniLegali">Informazioni Legali</button> <span>|</span> <button
                        type="button" class="btn-foot" data-bs-toggle="modal"
                        data-bs-target="#privacyAndCookies">Privacy Policy e Cookie Policy</button>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <div class="modal fade" id="informazioniLegali" tabindex="-1" aria-labelledby="informazioni legali"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="informazioni legali">Informazioni Legali</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    I testi, le informazioni e gli altri dati pubblicati in questo sito nonchè i link ad altri siti
                    presenti sul web hanno esclusivamente scopo informativo e non assumono alcun carattere di
                    ufficialità. Non assume alcuna responsabilità per eventuali errori od omissioni di qualsiasi tipo e
                    per qualunque tipo di danno diretto, indiretto o accidentale derivante dalla lettura o dall'impiego
                    delle informazioni pubblicate, o di qualsiasi forma di contenuto presente nel sito o per l'accesso o
                    l'uso del materiale contenuto in altri siti.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="privacyAndCookies" tabindex="-1" aria-labelledby="privacy and cookies"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="privacy and cookies">Privacy Policy e Cookie Policy</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>Informativa privacy ai sensi degli artt. 13-14 del Regolamento Europeo “Privacy” (GDPR)</h2>
                    <p>
                        I dati personali da Lei inseriti, sono trattati dal proprietario del sito Dr. Bragagnolo Andrea
                        Podologo - Corso Sempione 119 - 20025 Legnano (MI) - +393474960371 in qualità di Titolare, per
                        finalità connesse alla fornitura dei servizi da Lei richiesti (a titolo esemplificativo:
                        richiedere informazioni, registrarsi al sito per ricevere vantaggi e offerte, ottenere
                        preventivi, effettuare pagamenti, acquistare beni e riceverli presso un domicilio da Lei
                        indicato, effettuare una prenotazione, scambiare documenti). Inoltre, i dati da Lei forniti,
                        potrebbero essere trattati, solo su Suo esplicito consenso, al fine di inviarLe comunicazioni di
                        natura commerciale via email o sms relativamente ai servizi offerti dal Titolare. Nel primo
                        caso, la base giuridica del trattamento è l’esecuzione di un accordo; nel secondo caso è il
                        consenso. I trattamenti avverranno con modalità elettroniche e verranno messi a disposizione
                        delle terze parti (Responsabili Esterni del trattamento) nell’ambito dell’Unione Europea o in
                        Paesi extra UE, regolarmente contrattualizzate e che offrono adeguate garanzie di sicurezza,
                        necessarie per la fornitura di servizi essenziali al soddisfacimento delle Sue esigenze. Tali
                        Responsabili Esterni, il cui elenco è disponibile dietro richiesta, possono appartenere a
                        categorie di soggetti che supportano il Titolare nell’erogazione dei servizi offerti tramite il
                        presente sito (quali, a titolo esemplificativo: sviluppatori software e gestori di siti web,
                        spedizionieri). Inoltre, saranno trattati per finalità di analisi statistiche e di marketing
                        diretto, in maniera anonima, come meglio specificato dalla cookie policy. Per modificare o
                        cancellare i soli dati che sono archiviati sui sistemi che erogano il presente sito, cliccare
                        qui. Le informazioni da lei inserite nel form (compreso il suo indirizzo email) potranno essere
                        comunicate a una società terza che agirà in qualità di Responsabile esterno e che supporta il
                        Titolare nella gestione del sito e nell’evasione della sua richiesta. Nel caso di richiesta di
                        cancellazione dei suoi dati, La informiamo che potrebbe non essere più possibile continuare a
                        fornirLe il servizio richiestoci. La informiamo, infine, che potrà proporre reclamo all’Autorità
                        Garante per la Protezione dei Dati, qualora ritenesse siano stati violati i suoi diritti.
                    </p>
                    <h2>Cookie Policy</h2>
                    <script id="CookieDeclaration" src="https://consent.cookiebot.com/aac44f96-0881-4372-b0db-0295c737f75d/cd.js" type="text/javascript" async></script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
