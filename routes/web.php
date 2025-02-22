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
            "name" => "DITO A MARTELLO",
            "url" => "/patologie/dito-a-martello",
            "img" => "ditoMartello.jpg",
            "desc" => "Il dito a martello è una deformità caratterizzata dalla dorsiflessione della falange prossimale e dalla plantarflessione di quella intermedia, spesso causando dolore e lesioni. Se il dito è flessibile si parla di atteggiamento, se rigido di deformità. La causa principale è un cattivo appoggio del piede, tipico nei piedi cavi, ma possono contribuire anche artrite, neuropatie e scarpe inadeguate. Il trattamento iniziale prevede medicazioni e calzature adeguate, seguite da ortesi plantari per prevenire il peggioramento."
        ],
        [
            "name" => "ALLUCE RIGIDO",
            "url" => "/patologie/alluce-rigido",
            "img" => "alluceRigido.jpg",
            "desc" => "L’alluce rigido è una patologia degenerativa che riduce la mobilità dell'articolazione metatarso-falangea, causando dolore e gonfiore. Con il tempo, il processo artrosico porta alla formazione di esostosi e osteofiti. È causato da sovraccarico articolare dovuto a sport intensi o disfunzioni meccaniche del piede. La diagnosi precoce è fondamentale, e il trattamento conservativo con ortesi plantari mira a ridurre l’infiammazione e rallentare la progressione della patologia."
        ],
        [
            "name" => "FASCITE PLANTARE",
            "url" => "/patologie/fascite-plantare",
            "img" => "fascitePlantare.jpg",
            "desc" => "La fascite plantare è un'infiammazione dell'aponeurosi plantare, che causa dolore al tallone, più intenso al mattino e dopo attività prolungata. Può portare alla formazione della spina calcaneale. Le cause principali sono la sindrome pronatoria, il sovrappeso e la rigidità della muscolatura posteriore della gamba. Il trattamento conservativo include ortesi plantari, bendaggi funzionali, stretching e terapie fisiche come onde d'urto."
        ],
        [
            "name" => "NEUROMA DI MORTON",
            "url" => "/patologie/neuroma-di-morton",
            "img" => "morton.jpg",
            "desc" => "Il Neuroma di Morton è un ispessimento della guaina del nervo interdigitale, causato da un trauma cronico dovuto alla compressione dell’avampiede. Si manifesta con dolore elettrico e scosse interne al piede, spesso accompagnate da parestesie. Le cause includono scarpe strette e alterazioni biomeccaniche come la sindrome pronatoria. Il trattamento prevede calzature adeguate e ortesi plantari per ridurre la compressione e migliorare la distribuzione del carico."
        ],
        [
            "name" => "QUINTO DITO VARO",
            "url" => "/patologie/quinto-dito-varo",
            "img" => "quintoVaro.jpg",
            "desc" => "Il quinto dito varo è una deformità che porta il quinto dito a inclinarsi verso l’interno, entrando in conflitto con il quarto dito. La sporgenza visibile è in realtà la testa del quinto metatarso, deviata in abduzione. Le cause principali sono biomeccaniche, ma possono includere patologie reumatoidi o neurologiche. Il trattamento conservativo con ortesi plantari aiuta a prevenire la deformazione e a ridurre il sovraccarico dell’avampiede."
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
        "dito-a-martello" => [
            "name" => "Dito a Martello",
            "img" => "ditoMartello.jpg",
            "cause" => "Il dito a martello è causato principalmente da un cattivo appoggio del piede, che altera la funzionalità dei muscoli responsabili del movimento delle dita. È comune nei piedi cavi, dove il paziente tende a contrarre le dita per compensare l'instabilità. Altre cause includono artrite reumatoide, neuropatia diabetica, sindrome di Charcot-Marie-Tooth e l'uso di calzature troppo strette o rigide.",
            "sintomi" => "Il dito si presenta flesso a livello della falange intermedia, con possibile formazione di callosità, borsiti e ulcere a causa dello sfregamento con la calzatura. Nei casi iniziali il dito è ancora flessibile (atteggiamento), mentre nei casi avanzati diventa rigido a causa dell'artrosi (deformità strutturata).",
            "cura" => "Il trattamento iniziale prevede l'uso di calzature adeguate e medicazioni per proteggere le zone di pressione. Successivamente, ortesi plantari personalizzate possono aiutare a riequilibrare l'attività muscolare e prevenire il peggioramento della deformità. Nei casi più avanzati può essere necessario un intervento chirurgico correttivo."
        ],
        "alluce-rigido" => [
            "name" => "Alluce Rigido",
            "img" => "alluceRigido.jpg",
            "cause" => "L'alluce rigido è causato da un sovraccarico dell'articolazione metatarso-falangea, spesso dovuto ad attività sportive intense o disfunzioni biomeccaniche del piede. L'usura della cartilagine porta a un processo artrosico con formazione di osteofiti e perdita di mobilità articolare.",
            "sintomi" => "Rigidità progressiva dell'alluce con dolore durante la flesso-estensione. Il paziente può avvertire difficoltà nel camminare e gonfiore locale. Nei casi avanzati, la formazione di esostosi può alterare la biomeccanica del piede e causare dolore persistente.",
            "cura" => "L'approccio conservativo prevede ortesi plantari per ridurre l'infiammazione e rallentare la progressione dell'artrosi. Nei casi avanzati, può essere necessario un intervento chirurgico per rimuovere gli osteofiti o bloccare l'articolazione (artrodesi)."
        ],
        "fascite-plantare" => [
            "name" => "Fascite Plantare",
            "img" => "fascitePlantare.jpg",
            "cause" => "La fascite plantare è causata principalmente da una sindrome pronatoria, dove un eccessivo appiattimento dell'arco plantare comporta uno stiramento dell'aponeurosi plantare. Fattori di rischio includono sovrappeso, uso di calzature inadeguate, attività sportive ad alto impatto e rigidità della muscolatura posteriore della gamba.",
            "sintomi" => "Dolore localizzato al tallone, più intenso al mattino nei primi passi e dopo lunghi periodi di inattività. Nei casi cronici, il dolore può irradiarsi lungo tutta la pianta del piede e diventare costante. In alcuni casi, può svilupparsi una spina calcaneale visibile alla radiografia.",
            "cura" => "Il trattamento conservativo è l'approccio principale, includendo ortesi plantari per controllare la pronazione e ridurre lo stress sulla fascia plantare. Terapie fisiche come onde d'urto, stretching e bendaggi funzionali possono ridurre il dolore e l'infiammazione. Nei casi gravi può essere necessario un trattamento infiltrativo o chirurgico."
        ],
        "neuroma-di-morton" => [
            "name" => "Neuroma di Civinini-Morton",
            "img" => "morton.jpg",
            "cause" => "Il neuroma di Morton è causato da un trauma cronico dovuto alla compressione trasversale dell'avampiede. Fattori predisponenti includono l'uso di calzature strette, artrite reumatoide e sindrome pronatoria, che favoriscono l'allargamento dell'avampiede e lo schiacciamento del nervo interdigitale.",
            "sintomi" => "Dolore di natura elettrica o sensazione di scossa nel secondo e terzo spazio intermetatarsale. Il paziente può avvertire parestesia e intorpidimento delle dita, con necessità di rimuovere le scarpe per alleviare il fastidio.",
            "cura" => "La terapia prevede l'uso di calzature ampie e ortesi plantari per ridurre la compressione del nervo. Nei casi più gravi si può ricorrere a infiltrazioni con corticosteroidi o, in ultima istanza, alla rimozione chirurgica del neuroma."
        ],
        "quinto-dito-varo" => [
            "name" => "Quinto Dito Varo",
            "img" => "quintoVaro.jpg",
            "cause" => "Il quinto dito varo è dovuto a un errato appoggio del piede che porta a una sollecitazione eccessiva dell'area laterale dell'avampiede. Può essere associato a patologie reumatiche o neurologiche che alterano la biomeccanica del piede.",
            "sintomi" => "Deformazione del quinto dito con conflitto contro il quarto dito, causando dolore e formazione di una sporgenza ossea sulla testa del quinto metatarso. Possono svilupparsi callosità e infiammazione locale.",
            "cura" => "La terapia conservativa prevede l'uso di ortesi plantari per correggere il carico e prevenire il peggioramento della deformità. Nei casi avanzati, può essere necessario un intervento chirurgico per riallineare il metatarso."
        ],
    ];

    return view('patologie.show', ["name" => $name, "patologie" => $patologie]);
});
