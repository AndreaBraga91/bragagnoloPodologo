<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/patologie', function () {
    $patologie = [
        [
            "name" => "Onicocriptosi",
            "url" => "/patologie/onicocriptosi",
            "img" => "onicocriptosi.jpg",
            "desc" => "L’onicocriptosi, comunemente nota come unghia incarnita,
è una lesione che si manifesta soprattutto all’alluce,
associata ad un processo flogistico doloroso, spesso
purulento e con possibile presenza di granuloma.
Le cause più frequenti sono problematiche di appoggio che
portano l’alluce in conflitto con la calzatura o le altre dita,
taglio scorretto, traumi e calzature non idonee.
Il trattamento conservativo mira alla risoluzione del
processo infiammatorio evitandone il cronicizzarsi."
        ],
        [
            "name" => "Alluce Valgo",
            "url" => "/patologie/alluce-valgo",
            "img" => "alluceValgo.jpg",
            "desc" => "L’alluce valgo è una patologia caratterizzata da una rotazione in eversione del primo dito sul piano frontale. Non va confuso con l’abduzione (deviazione verso le altre dita) o con la sporgenza del primo metatarso. È causato principaalmente da un appoggio scorretto. La chirurgia corregge la deformità ma non la causa, fondamentali sono quindi plantari su misura per prevenirne o rallentarne l’evoluzione."
        ],
        [
            "name" => "Metatarsalgia",
            "url" => "/patologie/metatarsalgia",
            "img" => "metatarsalgia.jpg",
            "desc" => "La metatarsalgia è un'infiammazione a carico dei tessuti molli delle teste dei metatarsi, con dolore plantare all’avampiede, spesso accompagnato da gonfiore e ispessimenti cutanei. È causata da appoggi errati, traumi, calzature inadeguate o sovrappeso. Il trattamento conservativo, con scarpe adeguate, bendaggi funzionali e plantari su misura, offre risultati eccellenti se applicato correttamente."
        ],
        [
            "name" => "Dito a Martello",
            "url" => "/patologie/dito-a-martello",
            "img" => "ditoMartello.jpg",
            "desc" => "Il dito a martello è una deformità caratterizzata dalla dorsiflessione della falange prossimale e dalla plantarflessione di quella intermedia, spesso causando dolore e lesioni. Se il dito è flessibile si parla di atteggiamento, se rigido di deformità. La causa principale è un cattivo appoggio del piede, tipico nei piedi cavi, ma possono contribuire anche artrite, neuropatie e scarpe inadeguate. Il trattamento iniziale prevede medicazioni e calzature adeguate, seguite da ortesi plantari per prevenire il peggioramento."
        ],
        [
            "name" => "Alluce Rigido",
            "url" => "/patologie/alluce-rigido",
            "img" => "alluceRigido.jpg",
            "desc" => "L’alluce rigido è una patologia degenerativa che riduce la mobilità dell'articolazione metatarso-falangea, causando dolore e gonfiore. Con il tempo, il processo artrosico porta alla formazione di esostosi e osteofiti. È causato da sovraccarico articolare dovuto a sport intensi o disfunzioni meccaniche del piede. La diagnosi precoce è fondamentale, e il trattamento conservativo con ortesi plantari mira a ridurre l’infiammazione e rallentare la progressione della patologia."
        ],
        [
            "name" => "Fascite Plantare",
            "url" => "/patologie/fascite-plantare",
            "img" => "fascitePlantare.jpg",
            "desc" => "La fascite plantare è un'infiammazione dell'aponeurosi plantare, che causa dolore al tallone, più intenso al mattino durante i primi passi, tende a diminuire nel corso della giornata. Può portare alla formazione di un'entesopatia calcifica, noya come spina calcaneale. Le cause principali sono la sindrome pronatoria, il sovrappeso e la rigidità della muscolatura posteriore della gamba. Il trattamento conservativo include ortesi plantari, bendaggi funzionali, stretching e terapie fisiche come onde d'urto."
        ],
        [
            "name" => "Neuroma di Morton",
            "url" => "/patologie/neuroma-di-morton",
            "img" => "morton.jpg",
            "desc" => "Il Neuroma di Civinini-Morton è un proliferazione non neoplastica ma iperplastica della guaina che riveste il nervo interdigitale, in particolare si manifesta sul ramo del secondo e terzo spazio intermetatarsale, causato da un trauma cronico dovuto alla compressione dell’avampiede. Si manifesta con dolore elettrico e scosse interne al piede, spesso accompagnate da parestesie. Le cause includono scarpe strette e alterazioni biomeccaniche come la sindrome pronatoria. Il trattamento prevede calzature adeguate e ortesi plantari per ridurre la compressione e migliorare la distribuzione del carico."
        ],
        [
            "name" => "Quinto Dito Varo",
            "url" => "/patologie/quinto-dito-varo",
            "img" => "quintoVaro.jpg",
            "desc" => "è un atteggiamento caratterizzato da una inversione del quinto dito sul piano frontale e una sua contemporanea adduzione sul piano traverso, che lo porta in conflitto con il quarto dito. La sporgenza visibile è in realtà la testa del quinto metatarso, deviata in abduzione. Le cause principali sono biomeccaniche, ma possono includere patologie reumatoidi o neurologiche. Il trattamento conservativo con ortesi plantari aiuta a prevenire la deformazione e a ridurre il sovraccarico dell’avampiede."
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
            "cause" => "L’onicocriptosi, comunemente nota come unghia incarnita, è una lesione che si manifesta soprattutto all’alluce. Le cause più frequenti includono un taglio scorretto, traumi ripetuti, utilizzo di calzature inadeguate e alterazioni biomeccaniche che favoriscono il conflitto dell’alluce con la scarpa o le altre dita. La valutazione iniziale ha lo scopo innanzitutto di individuare ed esporre al paziente le dinamiche che hanno portato all’insorgenza della lesione ",
            "sintomi" => "L’onicocriptosi si manifesta con dolore intenso, infiammazione locale e, nei casi più avanzati, con la formazione di pus e granuloma. Il tessuto circostante può apparire arrossato e gonfio, rendendo difficoltosa la deambulazione e l’utilizzo di calzature.",
            "cura" => "Il trattamento prevede la rimozione della porzione di lamina iteressata. Successivamente, si procede con medicazioni mirate fino alla completa remissione del processo infiammatorio. È fondamentale seguire il paziente fino alla ricrescita dell’unghia, educandolo a pratiche corrette di taglio e cura per prevenire recidive.",
        ],
        "alluce-valgo" => [
            "name" => "Alluce Valgo",
            "img" => "alluceValgo.jpg",
            "cause" => "Con il termine alluce valgo si definisce un atteggiamento in eversione del primo dito sul piano frontale, ossia una rotazione dell’alluce. Per rendere più comprensibile il concetto, un alluce è valgo quando la lamina ungueale non è più rivolta verso l’alto ma verso la linea sagittale del corpo. È infatti scorretto associare la definizione di alluce valgo alla deviazione di quest’ultimo verso le altre dita in quanto tale atteggiamento si manifesta invece sul piano traverso ed è quindi da indicarsi come abduzione dell’alluce. Altro errore comune è associare la sporgenza ossea mediale all’alluce, in quanto trattasi non della falange basale del primo dito ma della testa del primo metatarso il quale devia con un atteggiamento in adduzione. Causa principale di queste alterazioni è un appoggio scorretto del piede che comporta un sovraccarico del primo raggio, per tale motivo l’intervento chirurgico di queste patologie mostra spesso un recidivarsi del problema. Altri fattori possono essere patologie reumatoidi o neurologiche.",
            "sintomi" => "I principali sintomi dell’alluce valgo comprendono dolore locale e infiammazione a causa di uno conflitto con la calzatura",
            "cura" => "Importante è prevenire tali atteggiamenti con ortesi plantari su misura che blocchino o rallentino l’evoluzione del piede perché un appoggio scorretto si riflette anche e soprattutto sulle strutture sovrapodaliche.",
        ],
        "metatarsalgia" => [
            "name" => "Metatarsalgia",
            "img" => "metatarsalgia.jpg",
            "cause" => "La metatarsalgia è una condizione dolorosa che interessa l’avampiede, causata da un'infiammazione dei tessuti molli nella regione delle teste metatarsali. Le cause principali includono appoggio scorretto del piede, conformazione anatomica (piede cavo), traumi ripetuti, calzature inadeguate, sovrappeso e attività fisiche intense. Spesso la metatarsalgia è il risultato di una combinazione di più fattori che contribuiscono al sovraccarico dell’area metatarsale.",
            "sintomi" => "Il sintomo principale è il dolore plantare localizzato nell’avampiede, che tende ad aggravarsi con il carico e la deambulazione. Nei casi più acuti, possono comparire gonfiore, aumento della temperatura locale e ispessimenti cutanei (cheratosi) in corrispondenza delle teste metatarsali coinvolte.",
            "cura" => "Il trattamento iniziale è conservativo e, se applicato correttamente, garantisce ottimi risultati. È essenziale consigliare calzature adeguate con un corretto supporto plantare, abbinando eventualmente bendaggi funzionali per sostenere l’avampiede. Nei casi più complessi, la realizzazione di ortesi plantari su misura aiuta a distribuire il carico in modo uniforme, riducendo la pressione sulle teste metatarsali.",
        ],
        "dito-a-martello" => [
            "name" => "Dito a Martello",
            "img" => "ditoMartello.jpg",
            "cause" => "Il dito a martello è causato principalmente da un cattivo appoggio del piede, che altera la funzionalità dei muscoli responsabili del movimento delle dita. È comune nei piedi cavi, dove il paziente, per compensare l'instabilità tende a contrarre le dita comeper aggrapparsi al suolo. Altre cause includono artrite reumatoide, neuropatia diabetica, sindrome di Charcot-Marie-Tooth e l'uso di calzature troppo strette o rigide.",
            "sintomi" => "Il dito si presenta flesso a livello della falange intermedia, con possibile formazione di cheratosi, borsiti e ulcere a causa dello sfregamento con la calzatura. Nei casi iniziali il dito è ancora flessibile (atteggiamento), mentre nei casi avanzati diventa rigido a causa dell'artrosi (deformità strutturata).",
            "cura" => "Il trattamento iniziale prevede l'uso di calzature adeguate e medicazioni per proteggere le zone di pressione. Successivamente, ortesi plantari su misura possono aiutare a riequilibrare l'attività muscolare e prevenire il peggioramento della deformità."
        ],
        "alluce-rigido" => [
            "name" => "Alluce Rigido",
            "img" => "alluceRigido.jpg",
            "cause" => "L'alluce rigido è causato da un sovraccarico dell'articolazione metatarso-falangea, spesso dovuto ad attività sportive intense o disfunzioni biomeccaniche del piede.",
            "sintomi" => "Questa problematica si manifesta mediante una difficoltà nella flesso-estensione dell’alluce, il quale potrebbe risultare sollevato rispetto al piano di appoggio con il paziente in posizione eretta. Nella fase iniziale il dolore si presenta solo durante il movimento, come in seguito ad una camminata o ad attività sportiva. Con il progredire della patologia però i sintomi diventano più acuti e costanti e i traumi all’articolazione innescano un processo artrosico che provoca gonfiore e lo sviluppo di sporgenze ossee come esostosi (formazioni superficiali) ed osteofiti (piccole escrescenze lungo i margini articolari) che sostituiscono progressivamente il tessuto cartilagineo. ",
            "cura" => "L’approccio conservativo mediante la realizzazione di ortesi plantari ha lo scopo, soprattutto nella fase iniziale, di ridurre l’infiammazione e bloccare o rallentare l’evoluzione della patologia."
        ],
        "fascite-plantare" => [
            "name" => "Fascite Plantare",
            "img" => "fascitePlantare.jpg",
            "cause" => "La fascite plantare è causata principalmente da una sindrome pronatoria, dove un eccessivo appiattimento dell'arco plantare comporta uno stiramento dell'aponeurosi plantare. Fattori di rischio includono sovrappeso, uso di calzature inadeguate, attività sportive ad alto impatto e rigidità della muscolatura posteriore della gamba.",
            "sintomi" => "Dolore localizzato al tallone, più intenso al mattino nei primi passi e dopo lunghi periodi di inattività. Nei casi cronici, il dolore può irradiarsi lungo tutta la pianta del piede e diventare costante. In alcuni casi, può svilupparsi una calcificazione della sua inserzione sul calcagno visibile in radiografia.",
            "cura" => "Il trattamento conservativo è la terapia d’elezione e prevede la realizzazione di ortesi plantari per controllare l’eccesso di pronazione che scatena il sintomo. L’applicazione di bendaggi funzionali, stretching e terapie fisiche come onde d’urto possono essere parti integranti della cura.."
        ],
        "neuroma-di-morton" => [
            "name" => "Neuroma di Civinini-Morton",
            "img" => "morton.jpg",
            "cause" => "Il neuroma di Civinini-Morton è causato da un trauma cronico dovuto alla compressione trasversale dell'avampiede. Fattori predisponenti includono l'uso di calzature strette, artrite reumatoide e sindrome pronatoria, che favoriscono l'allargamento dell'avampiede e lo schiacciamento del nervo interdigitale.",
            "sintomi" => "Dolore di natura elettrica o sensazione di scossa nel secondo e terzo spazio intermetatarsale. Il paziente può avvertire parestesia e intorpidimento delle dita, con necessità di rimuovere le scarpe per alleviare il fastidio.",
            "cura" => "La terapia prevede l'uso di calzature comode per ridurre la compressione trasversale del nervo, eventualmente abbinate ad ortesi plantari con sostegno in grado di allargare il ventaglio metatarsale."
        ],
        "quinto-dito-varo" => [
            "name" => "Quinto Dito Varo",
            "img" => "quintoVaro.jpg",
            "cause" => "Le cause sono prevalentemente di natura biomeccanica ossia legate ad un appoggio non corretto che porta ad una sollecitazione eccessiva della fascia esterna dell’avampiede, non devono però essere trascurate patologie reumatoidi o neurologiche",
            "sintomi" => "Il conflitto tra quarto e quinto dito può provocare lo svilupparsi di cheratosi e lesioni locali, mentre lo sporgere della testa metatarsale l'insorgenza di borsite",
            "cura" => "Fondamentale è quindi la terapia conservativa di prevenzione mediante la realizzazione di ortesi plantari atte ad evitare la deformazione del quinto metatarso."
        ],
    ];

    return view('patologie.show', ["name" => $name, "patologie" => $patologie]);
});
