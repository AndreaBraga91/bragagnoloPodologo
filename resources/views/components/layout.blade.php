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
        <img src="{{ Vite::asset('resources/images/logoAB.svg') }}" alt="" class="img-fluid">
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
                    <p>
                        Questo Sito utilizza cookie tecnici (ovvero cookie necessari), e con il tuo consenso anche
                        cookie analitici e di profilazione, che utilizzeremo noi e terze parti, utili rispettivamente
                        per consentire alcune funzionalità fondamentali per il Sito, per ottenere misurazioni delle
                        perfomance del Sito stesso o per fornirti indicazioni promozionali in linea con i tuoi
                        interessi.<br /><br />
                        Per accettare, rifiutare o selezionale i cookie in base alle finalità, utilizza i comandi
                        presenti nel popup banner per la gestione dei cookie.<br /><br />
                        In particolare, per sapere quali cookie vengono installati tramite il presente sito ed esprimere
                        le tue preferenze a riguardo, seleziona il comando “ “Dettagli” dove è possibile anche
                        visualizzare i singoli cookie rilasciati in ogni categoria. Per selezionare le finalità di tuo
                        interesse utilizza il box riportato nel banner, e clicca su “Personalizza” per confermare le tue
                        preferenze.<br /><br />
                        Le tue preferenze verranno registrate in un’apposita piattaforma di gestione del consenso ai
                        cookie (la "CMP"), sviluppata in conformità ai principi della normativa sul trattamento dei dati
                        personali applicabile secondo le linee guida per consentire all’utente di esercitare le sue
                        scelte in maniera granulare. La CMP consente di prestare o negare il consenso a varie tipologie
                        di cookie, che sono identificate e classificate sulla base delle finalità per le quali i cookie
                        vengono rilasciati e utilizzati, rendendo più semplice ed immediato il loro
                        riconoscimento.<br /><br />
                        Puoi in qualunque momento revocare o modificare il consenso rilasciato, cliccando sulla relativa
                        icona di accesso alla CPM che apparirà sul Sito. Tale icona verrà visualizzata in basso a
                        sinistra, una volta che avrai espresso le tue preferenze tramite il pop up banner visualizzato,
                        nel momento in cui accedi al Sito stesso.<br /><br />
                        I cookies utilizzati in questo Sito rientrano nelle categorie descritte di seguito.
                    </p>
                    <h3>Cosa sono i cookies</h3>
                    <p>
                        I cookies sono piccoli file di testo che vengono automaticamente posizionati sul PC del
                        navigatore all'interno del browser. Essi contengono informazioni di base sulla navigazione in
                        Internet e grazie al browser vengono riconosciuti ogni volta che l'utente visita il sito.
                        Di seguito vengono forniti dettagli sui cookie installati da questo sito e indicazioni su come
                        gestire le preferenze in merito ad essi.
                    </p>
                    <h3>A cosa servono i cookies</h3>
                    <p>I cookie sono utili in quanto consentono di memorizzare le preferenze di navigazione dell’utente
                        e quindi personalizzare il sito, secondo le sue esigenze migliorando le esperienze di
                        navigazione degli utenti. I cookie possono ad esempio rendere più immediato l’utilizzo del Sito
                        e/o abilitare determinate funzionalità. Ad esempio, i cookie possono permettere di evitare di
                        reinserire le stesse informazioni più volte durante la visita. In determinati casi, inoltre, i
                        cookie possono fare in modo che le pubblicità visualizzate online siano più adeguate all’utente
                        o pertinenti ai suoi interessi. Alcuni cookie sono necessari alla corretta erogazione del Sito o
                        utili per una fruizione personalizzata degli stessi; in questo caso, la loro inibizione potrebbe
                        compromettere alcune funzionalità dei Sito. Inoltre, grazie ai cookie, si possono pubblicare sul
                        Sito stesso, direttamente o tramite terzi, inserzioni pubblicitarie in linea con i tuoi
                        interessi, dedotti sulla base delle tue attività online e delle tue abitudini di navigazione.
                    </p>
                    <h3>Quali categorie di cookie sono utilizzate sul Sito</h3>
                    <h4>1 - Cookie tecnici ovvero necessari</h4>
                    <p>I cookie tecnici descritti qui di seguito non richiedono consenso e pertanto vengono installati
                        automaticamente a seguito dell’accesso al sito.<br />


                        Cookie necessari al funzionamento: cookies che permettono al sito di funzionare correttamente
                        anche consentendo all’utente di avere un’esperienza di navigazione funzionale. Ad esempio,
                        mantengono l'utente collegato durante la navigazione evitando che il sito richieda di collegarsi
                        più volte per accedere alle pagine successive.<br /><br />


                        Cookie Statistici e di Misurazione dell'audience: cookie che aiutano a capire, attraverso dati
                        raccolti in forma anonima e aggregata, come gli utenti interagiscono con il Sito internet
                        fornendo informazioni relative alle sezioni visitate, il tempo trascorso sul sito, eventuali
                        malfunzionamenti.<br /><br />


                        Per esempio, in alcuni casi i cookie di Google Analytics utilizzati da questo sito, sono stati
                        resi anonimi e quindi sono equivalenti a cookie tecnici.</p>
                    <h4>2 – Cookie Funzionali</h4>
                    <p>In questa categoria rientrano i cookie che permettono di ricordare le preferenze selezionate
                        durante la navigazione, ad esempio, consentono di impostare la lingua. Questi cookie sono
                        rilasciati soltanto su richiesta dell’utente e mediante suo preventivo consenso. L'utente è
                        libero di prestare il proprio consenso all'installazione dei cookie funzionali e revocarlo in
                        qualsiasi momento, tramite la CMP, senza che la possibilità di visitare il Sito e fruire dei
                        suoi contenuti sia compromessa; tuttavia, se non acconsentissi a questi cookie potrebbe essere
                        pregiudicato l’utilizzo di alcune funzionalità.
                        Puoi accedere, in qualunque momento, alla CMP tramite l’icona presente sul Sito, dove troverai
                        il riepilogo dei consensi rilasciati che potrai modificare cliccando sul pulsante “Modifica
                        consenso”; a questo punto si aprirà una schermata che ti permette di modificare le tue
                        preferenze scegliendo le categorie di tuo interesse e tramite il pulsante “Dettagli” puoi
                        conoscere quali cookie funzionali sono rilasciati sul Sito, la loro finalità e la durata. Una
                        volta fatta la tua scelta, per confermarla clicca sul pulsante “Personalizza”.</p>
                    <h4>3 – Cookie Analitici</h4>
                    <p>I cookie di questa categoria vengono utilizzati per raccogliere informazioni statistiche, in
                        forma non aggregata, sull'uso del Sito da parte degli utenti che accedono al Sito stesso e sul
                        modo in cui questi navigano sul Sito.
                        Come previsto dalla normativa applicabile, per l'installazione di cookie analitici di terze
                        parti è richiesto il preventivo consenso dell'utente. Nel caso in cui presti il tuo consenso
                        all'installazione dei cookie analitici, il Titolare terrà traccia di tale consenso attraverso un
                        cookie tecnico specifico. In questo modo, sarà possibile evitare di riproporre il cookie banner
                        durante le future visite al Sito. Puoi accedere, in qualunque momento, alla CMP tramite l’icona
                        presente sul Sito, dove troverai il riepilogo dei consensi rilasciati che potrai modificare
                        cliccando sul pulsante “Modifica consenso”; a questo punto si aprirà una schermata che ti
                        permette di modificare le tue preferenze scegliendo le categorie di tuo interesse e tramite il
                        pulsante “Dettagli” puoi conoscere quali cookie analitici sono rilasciati sul Sito ed ottenere
                        così tutte le informazioni necessarie. Una volta fatta la tua scelta, per confermarla clicca sul
                        pulsante “Personalizza”.</p>
                    <h4>4 – Cookie di Profilazione</h4>
                    <p>I cookie di profilazione vengono utilizzati per raggruppare gli utenti in categorie omogenee in
                        base, ad esempio, alle preferenze dell'utente. Tali cookie possono essere utilizzati, tra
                        l’altro, per inviare messaggi pubblicitari conformi al comportamento dell’utente in rete ed ai
                        suoi interessi di navigazione. In conformità con la normativa applicabile, è necessario il
                        previo consenso degli utenti per l'installazione dei cookie di profilazione. L’utente è libero
                        di prestare il proprio consenso all'installazione dei cookie di profilazione e revocarlo in
                        qualsiasi momento, tramite la CMP senza che la possibilità di visitare il Sito e fruire dei suoi
                        contenuti sia compromessa. Nel caso in cui l’utente presti il suo consenso all'installazione dei
                        cookie di profilazione, il Titolare terrà traccia di tale consenso attraverso un cookie tecnico
                        specifico. In questo modo, sarà possibile evitare di riproporre il cookie banner durante le
                        future visite al Sito.
                        I cookie di profilazione sono installati dal Titolare e da soggetti terzi, che agiscono in
                        qualità di autonomi titolari del trattamento dei dati (cookie di terze parti).
                        Puoi accedere, in qualunque momento, alla CMP tramite l’icona presente sul Sito, dove troverai
                        il riepilogo dei consensi rilasciati che potrai modificare cliccando sul pulsante “Modifica
                        consenso”; a questo punto si aprirà una schermata che ti permette di modificare le tue
                        preferenze scegliendo le categorie di tuo interesse e tramite il pulsante “Dettagli” di ottenere
                        maggiori informazioni sulle terze parti che installano i cookie di profilazione, sui singoli
                        cookie rilasciati e sulla loro durata. Una volta fatta la tua scelta, per confermarla clicca sul
                        pulsante “Personalizza”.

                        Inoltre, accedendo alla pagina <a
                            href="http://www.youronlinechoices.com/it/le-tue-scelte">http://www.youronlinechoices.com/it/le-tue-scelte</a>
                        è possibile
                        informarsi sulla pubblicità comportamentale oltre che disattivare o attivare i cookie delle
                        società elencate che lavorano con i gestori dei siti web per raccogliere e utilizzare
                        informazioni utili alla fruizione della pubblicità.</p>
                    <h3>Ricordati che puoi gestire le tue preferenze sui cookie anche attraverso il browser</h3>
                    <p>Si riportano di seguito istruzioni di maggior dettaglio per la gestione dei cookie da parte
                        dell’utente per i browser più diffusi. I produttori dei browser potrebbero aggiornare o
                        modificare i riferimenti dei link sottostanti di volta in volta, per cui si raccomanda di
                        verificare sempre le istruzioni fornite dai produttori dei browser di navigazione utilizzati per
                        comprendere come impostare i cookie.</p>
                    <h5>Se si utilizza il browser Edge</h5>
                    <ul>
                        <li>Per sapere come gestire i cookie, eliminarli, bloccarli, selezionarli tramite le
                            impostazioni di
                            questo browser si può consultare il seguente link: <a
                                href="https://support.microsoft.com/it-it/microsoft-edge/eliminare-i-cookie-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09">https://support.microsoft.com/it-it/microsoft-edge/eliminare-i-cookie-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09</a>.
                        </li>
                    </ul>
                    <h5>Se si utilizza il browser Firefox</h5>
                    <ul>
                        <li>Per sapere come gestire i cookie tramite le impostazioni di questo browser: <a
                                href="https://support.mozilla.org/it/kb/Gestione%20dei%20cookie">https://support.mozilla.org/it/kb/Gestione%20dei%20cookie</a>.
                        </li>
                        <li> Per sapere come gestire il pannello delle impostazioni privacy e inibire il tracciamento
                            delle tue attività in rete: <a
                                href="https://support.mozilla.org/it/kb/Impostazioni%20di%20Firefox%20-%20pannello%20Privacy">https://support.mozilla.org/it/kb/Impostazioni%20di%20Firefox%20-%20pannello%20Privacy</a>.
                        </li>
                        <li>Per sapere come attivare e disattivare i cookie: <a
                                href="https://support.mozilla.org/it/kb/Attivare%20e%20disattivare%20i%20cookie">https://support.mozilla.org/it/kb/Attivare%20e%20disattivare%20i%20cookie</a>.
                        </li>
                        <li>Per sapere come eliminare i cookie: <a
                                href="https://support.mozilla.org/it/kb/Eliminare%20i%20cookie">https://support.mozilla.org/it/kb/Eliminare%20i%20cookie</a>.
                        </li>
                        <li>Per sapere come bloccare i cookie: <a
                                href="https://support.mozilla.org/it/kb/Bloccare%20i%20cookie">https://support.mozilla.org/it/kb/Bloccare%20i%20cookie</a>.
                        </li>
                        <li>Per sapere come disattivare solo i cookie di terza parte: <a
                                href="https://support.mozilla.org/it/kb/Disattivare%20i%20cookie%20di%20terze%20parti">https://support.mozilla.org/it/kb/Disattivare%20i%20cookie%20di%20terze%20parti</a>.
                        </li>
                    </ul>
                    <h5>Se si utilizza il browser Safari</h5>
                    <ul>
                        <li>Per sapere come gestire i cookie tramite le impostazioni di questo browser: <a
                                href="https://support.apple.com/it-it/guide/deployment/depf7d5714d4/web">https://support.apple.com/it-it/guide/deployment/depf7d5714d4/web</a>.
                        </li>
                    </ul>
                    <h5>Se si utilizza il browser Google Chrome</h5>
                    <ul>
                        <li>Per sapere come gestire i cookie tramite le impostazioni di questo browser: <a
                                href="https://policies.google.com/technologies/cookies?hl=it&gl=it#managing-cookies">https://policies.google.com/technologies/cookies?hl=it&gl=it#managing-cookies</a>.
                        </li>
                        <li>Per sapere come attivare la modalità di navigazione in incognito: <a
                                href="https://support.google.com/chrome/answer/95464?hl=it">https://support.google.com/chrome/answer/95464?hl=it</a>.
                        </li>
                        <li>Per sapere come eliminare i cookie, bloccarli eventualmente anche in modo selettivo,
                            ricevere notifiche sulle tue impostazioni relative ai cookie: <a
                                href="https://support.google.com/chrome/answer/95647?hl=it">https://support.google.com/chrome/answer/95647?hl=it</a>.
                        </li>
                    </ul>
                    <br />
                    <p>Ultimo aggiornamento: 06/06/2023.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
