<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/patologie', function () {
    $patologie = [
        [
            "name" => "ONICOCRIPTOSI",
            "url" => "/patologie/onicocriptosi",
            "img" => "onicocriptosi.jpg",
            "desc" => "L’onicocriptosi, o unghia incarnita, colpisce spesso l’alluce causando dolore, infiammazione, talvolta infezione e granuloma. È dovuta a tagli errati, traumi, calzature inadatte o problemi di appoggio. La diagnosi chiarisce le cause; il trattamento prevede la rimozione della lamina interessata, medicazioni e monitoraggio fino alla guarigione e completa ricrescita dell’unghia."
        ],
        [
            "name" => "ALLUCE VALGO",
            "url" => "/patologie/alluce-valgo",
            "img" => "alluceValgo.jpg",
            "desc" => "L’alluce valgo è una rotazione del primo dito, con l’unghia rivolta verso la linea del corpo. Non va confuso con l’abduzione (deviazione verso le altre dita) o con la cipolla (sporgenza del metatarso). È causato da un appoggio scorretto. La chirurgia non elimina la causa; fondamentali sono plantari su misura per prevenire o rallentare l’evoluzione."
        ],
        [
            "name" => "METATARSALGIA",
            "url" => "/patologie/metatarsalgia",
            "img" => "metatarsalgia.jpg",
            "desc" => "La metatarsalgia è un'infiammazione delle teste dei metatarsi, con dolore plantare all’avampiede, spesso accompagnato da gonfiore e ispessimenti cutanei. È causata da appoggi errati, traumi, calzature inadeguate o sovrappeso. Il trattamento conservativo, con scarpe adeguate, bendaggi funzionali e plantari su misura, offre risultati eccellenti se applicato correttamente."
        ],
        [
            "name" => "PIEDE PIATTO",
            "url" => "/patologie/piede-piatto",
            "img" => "piedePiatto.jpg",
            "desc" => "l piede piatto è un cedimento dell’arco plantare mediale che porta all’appiattimento della volta plantare, causando instabilità e alterata distribuzione del carico. Può derivare da fattori genetici, lassità legamentosa, debolezza muscolare, sovrappeso o stress meccanici ripetuti. I sintomi variano da affaticamento e dolore a piedi, caviglie e ginocchia, fino a problemi posturali più estesi. Il trattamento conservativo con esercizi mirati, calzature adeguate e plantari su misura aiuta a migliorare il supporto e ridurre il disagio, mentre nei casi più gravi si può valutare l’intervento chirurgico."
        ],
    ];

    return view('patologie.index', ["patologie" => $patologie]);
});

Route::get('/chi-sono', function () {
    return view('chiSono');
});

Route::get('/lo-studio', function () {
    return view('loStudio');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/patologie/{name}', function ($name) {
    $patologie = [
        "onicocriptosi" => [
            "name" => "Onicocriptosi",
            "img" => "onicocriptosi.jpg",
            "cause" => "L’onicocriptosi, comunemente nota come unghia incarnita, è una condizione caratterizzata dalla crescita anomala della lamina ungueale che penetra nei tessuti molli circostanti. Le cause più frequenti includono un taglio scorretto delle unghie, traumi ripetuti, utilizzo di calzature inadeguate e alterazioni biomeccaniche che favoriscono il conflitto dell’alluce con la scarpa o le altre dita.",
            "sintomi" => "L’onicocriptosi si manifesta con dolore intenso, infiammazione locale e, nei casi più avanzati, con la formazione di pus e granuloma. Il tessuto circostante può apparire arrossato e gonfio, rendendo difficoltosa la deambulazione e l’utilizzo di calzature.",
            "cura" => "Il trattamento prevede la rimozione della porzione di unghia incarnita per alleviare la pressione sui tessuti circostanti. Successivamente, si procede con medicazioni mirate fino alla completa remissione del processo infiammatorio. È fondamentale seguire il paziente fino alla ricrescita dell’unghia, educandolo a pratiche corrette di taglio e cura per prevenire recidive.",
        ],
        "alluce-valgo" => [
            "name" => "Alluce Valgo",
            "img" => "alluceValgo.jpg",
            "cause" => "L’alluce valgo è una deformità del primo dito caratterizzata da una rotazione in eversione sul piano frontale. Tale condizione è spesso associata a un appoggio scorretto del piede, che determina un sovraccarico del primo raggio. Tra le cause principali troviamo fattori genetici, utilizzo di calzature strette o con tacchi alti e problematiche biomeccaniche che alterano la distribuzione del carico durante la deambulazione.",
            "sintomi" => "I principali sintomi dell’alluce valgo comprendono dolore locale, infiammazione e difficoltà nei movimenti. La deviazione dell’alluce può portare alla formazione di una prominenza ossea mediale, comunemente nota come cipolla, che tende a irritarsi con lo sfregamento della scarpa. Nei casi più gravi, la deformità può causare alterazioni nella postura e compromettere l’equilibrio del piede.",
            "cura" => "Il trattamento conservativo include l’utilizzo di ortesi plantari su misura per correggere l’appoggio del piede e ridurre la progressione della deformità. Nei casi avanzati, dove il dolore e la limitazione funzionale sono significativi, può essere indicato un intervento chirurgico. Tuttavia, la chirurgia corregge la deformità ma non la causa sottostante, motivo per cui è fondamentale agire precocemente con strategie preventive.",
        ],
        "metatarsalgia" => [
            "name" => "Metatarsalgia",
            "img" => "metatarsalgia.jpg",
            "cause" => "La metatarsalgia è una condizione dolorosa che interessa l’avampiede, causata da un'infiammazione dei tessuti molli nella regione delle teste metatarsali. Le cause principali includono appoggio scorretto del piede, conformazione anatomica particolare (piede cavo), traumi ripetuti, calzature inadeguate, sovrappeso e attività fisiche intense. Spesso la metatarsalgia è il risultato di una combinazione di più fattori che contribuiscono al sovraccarico dell’area metatarsale.",
            "sintomi" => "Il sintomo principale è il dolore plantare localizzato nell’avampiede, che tende ad aggravarsi con il carico e la deambulazione. Nei casi più acuti, possono comparire gonfiore, aumento della temperatura locale e ispessimenti cutanei (cheratosi) in corrispondenza delle teste metatarsali coinvolte.",
            "cura" => "Il trattamento iniziale è conservativo e, se applicato correttamente, garantisce ottimi risultati. È essenziale consigliare calzature adeguate con un corretto supporto plantare, abbinando eventualmente bendaggi funzionali per sostenere l’avampiede. Nei casi più complessi, la realizzazione di ortesi plantari su misura aiuta a distribuire il carico in modo uniforme, riducendo la pressione sulle teste metatarsali.",
        ],
        "piede-piatto" => [
            "name" => "Piede Piatto",
            "img" => "piedePiatto.jpg",
            "cause" => "Il piede piatto è una condizione caratterizzata dal cedimento dell'arco plantare mediale, con conseguente appiattimento della volta plantare. Può essere congenito o acquisito, con cause che includono predisposizione genetica, lassità legamentosa, debolezza muscolare, sovrappeso e sollecitazioni meccaniche prolungate. Nei casi più avanzati, il piede piatto può essere associato a instabilità articolare e a un’alterata distribuzione del carico durante la deambulazione.",
            "sintomi" => "I sintomi variano in base alla gravità della condizione. Nei casi lievi, il piede piatto può essere asintomatico, mentre nelle forme più avanzate possono insorgere dolore e affaticamento ai piedi, caviglie e ginocchia, soprattutto dopo lunghe camminate o attività fisica. Possono verificarsi anche alterazioni posturali con conseguenti dolori alla schiena e alle anche.",
            "cura" => "Il trattamento dipende dalla gravità della condizione. Nelle forme più lievi, esercizi di rinforzo muscolare e l’uso di ortesi plantari su misura aiutano a supportare l’arco plantare e a migliorare la distribuzione del carico. Nei casi più gravi, dove la deformità compromette la funzionalità del piede, può essere valutato un intervento chirurgico per correggere la struttura anatomica e ristabilire l’equilibrio biomeccanico.",
        ],
    ];

    return view('patologie.show', ["name" => $name, "patologie" => $patologie]);
});
