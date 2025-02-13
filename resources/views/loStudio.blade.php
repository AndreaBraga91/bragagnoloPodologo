<x-layout data-page="lo-studio">
    <section class="container">
        <div class="row vh-100 align-items-center">
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center img-studio-container vh-100">
                <div class="img-studio" style="background-image: url('{{ Vite::asset('resources/images/ingresso.jpg') }}')"></div>
                <div class="img-studio" style="background-image: url('{{ Vite::asset('resources/images/ingresso-1.jpeg') }}')"></div>
                <div class="img-studio" style="background-image: url('{{ Vite::asset('resources/images/sala-attesa.jpg') }}')"></div>
                <div class="img-studio" style="background-image: url('{{ Vite::asset('resources/images/sala-attesa-1.jpg') }}')"></div>
                <div class="img-studio" style="background-image: url('{{ Vite::asset('resources/images/sala-attesa-2.jpg') }}')"></div>
                <div class="img-studio" style="background-image: url('{{ Vite::asset('resources/images/sala-attesa-3.jpg') }}')"></div>
                <div class="img-studio" style="background-image: url('{{ Vite::asset('resources/images/sala-medicazioni-1.jpg') }}')"></div>
                <div class="img-studio" style="background-image: url('{{ Vite::asset('resources/images/sala-medicazioni.jpg') }}')"></div>
                <div class="img-studio" style="background-image: url('{{ Vite::asset('resources/images/sala-visite-2.jpg') }}')"></div>
                <div class="img-studio" style="background-image: url('{{ Vite::asset('resources/images/sala-visite-3.jpg') }}')"></div>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column text-center text-studio">
                <h1 class="display-3">Lo Studio</h1>
                <p class="fs-6">
                    Lo studio si trova al piano rialzato di un palazzo storico
                    recentemente ristrutturato del centro di Legnano,
                    facilmente raggiungibile sia in macchina che con i mezzi di
                    trasporto.</br>
                    L’edificio presenta due ingressi: il principale su Corso
                    Sempione e uno secondario su Via Savonarola, quest’ultimo
                    attrezzato per l’accesso di disabili.</br>
                    Lo studio si sviluppa su una superficie di 100 mq ed è così
                    composto: sala d’attesa con reception, sala medicazioni
                    con poltrona podologica e attrezzatura di sterilizzazione
                    dello strumentario, sala visite e laboratorio per la
                    realizzazione di ortesi plantari su calco in gesso.
                    Lo spazio è stato concepito in modo tale che ogni locale
                    abbia la sua precisa funzione per garantire sempre un
                    servizio di massima qualità al paziente.
                </p>
                <div class="p-4 mx-auto">
                    <a href="/contatti" class="btn-custom">
                        scopri dove trovarmi
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
