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
            "desc" => "Il termine “valgo” in biomeccanica indica una
atteggiamento in eversione sul piano frontale, ne consegue
che con “alluce valgo” si intende un dito ruotato, per
rendere più comprensibile il concetto, un alluce è valgo
quando la lamina ungueale non è più rivolta verso l’alto ma
verso la linea sagittale mediana del corpo.
Nel tempo, però, per convenzione ortopedica, si è iniziato a
usare il termine \"alluce valgo\" per descrivere una
deviazione laterale dell'alluce verso le altre dita. Tuttavia,
questo atteggiamento dovrebbe in realtà essere definito
come “abduzione”."
        ],
        [
            "name" => "Metatarsalgia",
            "url" => "/patologie/metatarsalgia",
            "img" => "metatarsalgia.jpg",
            "desc" => "La metatarsalgia è un processo infiammatorio a carico dei
tessuti molli delle teste dei metatarsi.
I pazienti riferiscono un dolore plantare in sede all’
avampiede, associato nei casi più acuti a gonfiore, calore e
talvolta anche a formazioni cheratosiche, volgarmente
dette calli o duroni, in corrispondenza delle teste
metatarsali interessate.
Una metatarsalgia raramente dipende da un solo fattore,
spesso infatti è la combinazione di più elementi."
        ],
        [
            "name" => "Dito a Martello",
            "url" => "/patologie/dito-a-martello",
            "img" => "ditoMartello.jpg",
            "desc" => "Il termine \"dito a martello\" si riferisce a un atteggiamento o
deformità caratterizzata dalla dorsiflessione della falange
prossimale e dalla plantarflessione della falange
intermedia. Questa situazione spesso provoca un conflitto
tra il dito e la calzatura, che può portare alla formazione di
cheratosi, borsiti e ulcere.
La differenza tra atteggiamento e deformità risiede nel
fatto che, nel primo caso, il dito è ancora flessibile, mentre
nel secondo è rigido, con la presenza di un processo
artrosico a carico della prima articolazione interfalangea.
"
        ],
        [
            "name" => "Alluce Rigido",
            "url" => "/patologie/alluce-rigido",
            "img" => "alluceRigido.jpg",
            "desc" => "L’alluce rigido è una patologia a carattere degenerativo che
porta ad una riduzione del movimento dell’articolazione
primo metatarso-falangea.
Questa problematica si manifesta mediante una difficoltà
nella flesso-estensione dell’alluce, il quale potrebbe
risultare sollevato rispetto al piano di appoggio con il
paziente in posizione eretta.
"
        ],
        [
            "name" => "Fascite Plantare",
            "url" => "/patologie/fascite-plantare",
            "img" => "fascitePlantare.jpg",
            "desc" => "La fascite plantare è una patologia del piede caratterizzata
da un processo infiammatorio a carico del legamento
arcuato o aponeurosi plantare, struttura fibrosa che origina
dal calcagno ed arriva sino alle dita, una sorta di fascio di
tessuti connettivi che supporta l'arco del piede e aiuta a
distribuire il peso corporeo durante la camminata."
        ],
        [
            "name" => "Neuroma di Morton",
            "url" => "/patologie/neuroma-di-morton",
            "img" => "morton.jpg",
            "desc" => "Il Neuroma di Civinini-Morton è un proliferazione non
neoplastica ma iperplastica della guaina che riveste il
nervo interdigitale, in particolare si manifesta sul ramo del
secondo e terzo spazio intermetatarsale, subito prima della
sua biforcazione alla radice delle dita.
"
        ],
        [
            "name" => "Quinto Dito Varo",
            "url" => "/patologie/quinto-dito-varo",
            "img" => "quintoVaro.jpg",
            "desc" => "Il quinto dito varo, anche chiamato bunionette, è un
atteggiamento caratterizzato da una inversione (rotazione)
del quinto dito sul piano frontale e una sua contemporanea
adduzione sul piano traverso, che lo porta in conflitto con il
quarto dito.
Come per l’alluce valgo c’è molta confusione nella
comprensione di questa patologia in quanto la sporgenza
ossea che si osserva trattasi non del dito ma della testa del
quinto metatarso, il quale sviluppa una deformità in
abduzione.
"
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
            "cause" => "La principale causa di questa problematica risiede in una
disfunzione podalica, ad esempio in caso di sindrome
pronatoria si osserva un valgismo (eversione) dell’alluce
che porta ad un traumatismo costante del bordo laterale
del dito con la calzatura, quadro spesso presente negli
adolescenti perché aggravato da una eccessiva
sudorazione, tipica di questa età. Altre cause sono una
gestione scorretta del taglio delle lamine ungueali, traumi
occasionali oppure l’utilizzo di calzature tropo strette in
punta.",
            "sintomi" => "I sintomi sono quelli classici di un processo infiammatorio
quindi il dito risulta molto dolente ed a causa del maggior
afflusso di sangue si percepisce un forte pulsare che si
manifesta attraverso un arrossamento della zona
interessata, gonfiore e calore.
Spesso si osserva la fuoriuscita di siero e talvolta la
presenza di granuloma piogenico.
Nei casi più gravi il paziente non riesce a tollerare
nemmeno la pressione del lenzuolo.",
            "cura" => "La valutazione iniziale ha lo scopo innanzitutto di
individuare ed esporre al paziente le dinamiche che hanno
portato all’insorgenza della lesione.
Il primo approccio cerca di ottenere una remissione dei
sintomi attraverso delle medicazioni ma se necessario si
procede alla rimozione della porzione di lamina ungueale
interessata, medicando il dito sino alla completa
guarigione.
In caso di disfunzioni podaliche è fondamentale seguire il
paziente con la realizzazione di ortesi plantari per evitare il
recidivarsi del problema.
",
        ],
        "alluce-valgo" => [
            "name" => "Alluce Valgo",
            "img" => "alluceValgo.jpg",
            "cause" => "Un appoggio scorretto del piede sicuramente rappresenta
la causa più importante di questi atteggiamenti, ad
esempio un eccesso di pronazione di retropiede oppure un
sovraccarico del primo raggio (primo cuneiforme e primo
metatarso) che porta inizialmente ad una adduzione ed
inversione del primo metatarso e conseguente abduzione
ed eversione dell’alluce.
Altro errore diffuso infatti è credere che nel quadro appena
descritto, la sporgenza ossea che si osserva, volgarmente
chiamata cipolla o bunion, sia la falange dell’alluce, trattasi
invece della testa del primo metatarso.
Cause secondarie ma da non trascurare sono patologie
reumatoidi o neurologiche con andamento degenerativo.",
            "sintomi" => "In caso di alluce valgo (everso) abbiamo un conflitto del
bordo laterale, per intenderci quello confinante al secondo
dito, contro la tomaia della calzatura e questo porta spesso
ad un importante processo infiammatorio che può
degenerare in onicocriptosi. Qualora l’alluce, oltre che
everso risulti particolarmente abdotto, il conflitto si
sviluppa anche con il secondo dito.
In caso di sporgenza ossea mediale (cipolla) della testa del
primo metatarso si potrebbe osservare anche in questa
sede infiammazione con dolore, arrossamento cutaneo ed
addirittura una borsite, anche se il sintomo più invalidante
potrebbe essere plantare ed in particolare si tratterebbe di
una metatarsalgia da trasferimento di carico delle seconda
testa metatarsale, sofferente proprio a causa
dell’allontanamento del primo metatarso.
",
            "cura" => "L’approccio terapeutico deve essere necessariamente
preventivo perché sebbene medicazioni, bendaggi
funzionali e indicazioni sull’utilizzo di calzature idonee
possano far regredire il processo infiammatorio, limitandoci
a questo agiremmo sul sintomo e non sulla causa del
problema. Ciò comporterebbe il rischio di recidive ma
soprattutto una degenerazione del quadro clinico, con
atteggiamenti che diventerebbero vere e proprie deformità
strutturate.
La terapia più importante quindi è la realizzazione di ortesi
plantari che compensino queste disfunzioni del piede e
aiutino a preservare il più possibile la fisiologica struttura
anatomica del piede.
",
        ],
        "metatarsalgia" => [
            "name" => "Metatarsalgia",
            "img" => "metatarsalgia.jpg",
            "cause" => "Principale causa di metatarsalgia è un appoggio scorretto,
infatti in caso di pronazione patologica potremmo
osservare una adduzione del primo metatarso e
conseguente metatarsalgia da trasferimento di carico alla
seconda testa metatarsale.
Altre fattori scatenanti includono la struttura anatomica del
piede (piede cavo), traumi, calzature non idonee (con una
suola molto rigida e bassa come scarpe anti-infortunistiche
e ballerine oppure al contrario tacchi molto alti), attività
fisiche molto intense, trattamenti estetici troppo aggressivi
mirati alla rimozione completa di eventuali cheratosi
plantari ritenute erroneamente la causa del problema, sino
ad arrivare a condizioni di sovrappeso legate a disfunzioni
metaboliche come in caso di ipotiroidismo.",
            "sintomi" => "Come già detto essendo un’infiammazione di natura
meccanica i sintomi si aggravano con il perdurare del
carico e si manifestano attraverso un dolore in sede
plantare all’avampiede, accompagnato talvolta da una
forte sensazione di pulsazione dovuta al gonfiore ed al
calore del processo flogistico.
Ciò porta il paziente a deambulare in modalità antalgica,
provocando quelli che si possono definire sintomi secondari
come crampi muscolari a piede e gamba, un appoggio
sull’esterno del piede che può causare traumi in inversione
della caviglia e sintomi ad articolazioni sovrapodaliche sino
ad un maggior gonfiore dell’avampiede non solo in sede
plantare ma anche delle dita.",
            "cura" => "La cura deve partire sempre dalla terapia più conservativa
anche perché in molti casi delle semplici indicazioni
possono essere risolutive.
Importante quindi la valutazione iniziale per individuare le
dinamiche che hanno provocato il problema e consigliare
delle calzature adatte ad ammortizzare meglio
l’avampiede, da associare eventualmente a bendaggi
funzionali di sostegno.
Qualora questo non fosse sufficiente si dovrebbe optare per
la realizzazione di un plantare su misura con l’intento di
ridurre la pressione a carico delle teste metatarsali ed
avere una distribuzione più omogenea del peso corporeo.",
        ],
        "dito-a-martello" => [
            "name" => "Dito a Martello",
            "img" => "ditoMartello.jpg",
            "cause" => "La causa principale del dito a martello è un cattivo
appoggio del piede che altera la funzionalità dei muscoli
responsabili del movimento delle dita. Non a caso questa
problematica si manifesta principalmente nei piedi cavi
(con arco plantare pronunciato), caratterizzati da una certa
instabilità e dove il paziente tende a contrarre
costantemente le dita, come se cercasse di \"aggrapparsi\"
al suolo.
Altre cause sono l'artrite reumatoide, patologie
neurologiche come la sindrome di Charcot-Marie-Tooth,
oltre all'uso di scarpe troppo strette e rigide.",
            "sintomi" => "L’atteggiamento iniziale di per sé risulta asintomatico
perché il dolore in realtà viene provocato dallo
sfregamento del dito con la calzatura.
In fase avanzata però, in presenza di una deformità ormai
strutturata, il paziente percepisce delle fitte interne alle
articolazioni a causa del processo artrosico sviluppatosi.
In questo quadro si osserva una riduzione del movimento
delle dita che risultano fredde e cianotiche, quindi dolenti
anche durante il riposo notturno.",
            "cura" => "Il trattamento iniziale prevede la gestione della fase acuta
attraverso opportune medicazioni e l'adozione di scarpe
adeguate. Successivamente, potrebbe essere necessario
ricorrere a ortesi plantari su misura per migliorare la
stabilità del piede e riequilibrare l'attività muscolare,
evitando così che l'atteggiamento iniziale evolva in una
deformità strutturata e quindi irreversibile."
        ],
        "alluce-rigido" => [
            "name" => "Alluce Rigido",
            "img" => "alluceRigido.jpg",
            "cause" => "Principali cause di alluce rigido, e della sofferenza della
cartilagine di qualsiasi articolazione, sono il sovraccarico
legato per esempio ad attività sportiva molto intensa
(overuse) e una disfunzione meccanica del piede che
comporti un rapporto articolare non congruo tra i due capi
ossei con conseguente consumo disomogeneo della
cartilagine.
La diagnosi precoce quindi risulta fondamentale per
impedire lo sviluppo di danni irreversibili con conseguenze
che coinvolgono non solo il piede ma più in generale l’arto
inferiore.",
            "sintomi" => "Nella fase iniziale il dolore si presenta solo durante il
movimento, come in seguito ad una camminata o ad
attività sportiva.
Con il progredire della patologia però i sintomi diventano
più acuti e costanti e i traumi all’articolazione innescano un
processo artrosico che provoca gonfiore e lo sviluppo di
sporgenze ossee come esostosi (formazioni superficiali) ed
osteofiti (piccole escrescenze lungo i margini articolari) che
sostituiscono progressivamente il tessuto cartilagineo.",
            "cura" => "L’approccio conservativo mediante la realizzazione di ortesi
plantari ha lo scopo, soprattutto nella fase iniziale, di
ridurre l’infiammazione e bloccare o rallentare l’evoluzione
della patologia."
        ],
        "fascite-plantare" => [
            "name" => "Fascite Plantare",
            "img" => "fascitePlantare.jpg",
            "cause" => "La causa principale è sicuramente una sindrome pronatoria
in quanto un appiattimento dell’arco plantare mediale
comporta uno stiramento di questo legamento ma non
sono fattori secondari l’eccessivo peso corporeo anche
dovuto a disfunzioni metaboliche, la contrattura della
muscolatura posteriore della gamba legata ad esempio ad
attività fisiche molto intense, traumi o calzature troppo
piatte prive di rialzo al retropiede.",
            "sintomi" => "Il dolore insorge solitamente in corrispondenza del tallone e
segue un andamento caratteristico: più intenso al mattino
durante i primi passi, tende a diminuire nel corso della
giornata per poi ripresentarsi alla sera.
Con il cronicizzarsi del problema però la sintomatologia
potrebbe estendersi a tutta la pianta del piede e diventare
costante.
A causa della continua trazione del legamento, un esame
radiografico potrebbe evidenziare, in corrispondenza della
sua inserzione sul calcagno, un’entesopatia calcifica,
comunemente nota come spina calcaneale.",
            "cura" => "Il trattamento conservativo è la terapia d’elezione e
prevede la realizzazione di ortesi plantari per controllare
l’eccesso di pronazione che scatena il sintomo.
L’applicazione di bendaggi funzionali, stretching e terapie
fisiche come onde d’urto possono essere parti integranti
della cura.
"
        ],
        "neuroma-di-morton" => [
            "name" => "Neuroma di Civinini-Morton",
            "img" => "morton.jpg",
            "cause" => "L’eziologia è da ricercarsi esclusivamente in un trauma
cronico mediante una compressione trasversale
dell’avampiede durante la deambulazione, che provoca
fibrosi ed iperplasia dei fasci nervosi.
Le cause di questo traumatismo possono essere diverse:
utilizzo di calzature molto strette in punta o molto fascianti,
patologie o disfunzioni podaliche come artrite reumatoide
o sindrome pronatoria che producano un allargamento
dell’avampiede.",
            "sintomi" => "I sintomi sono molto caratteristici in quanto il dolore è di
natura elettrica, scosse, percepite internamente al piede e
non a livello superficiale o plantare, che comportano la
necessità di togliersi la calzatura per massaggiare l’area
indolenzita. Talvolta si associano anche parestesia ed
intorpidimento delle dita.
Molto importante eseguire una diagnosi differenziale
rispetto ad una metatarsalgia, patologia spesso
concomitante, che interessa un’area simile ma con sintomi
completamente diversi.",
            "cura" => "La terapia consiste fondamentalmente nell’utilizzo di
calzature comode che riducano la compressione trasversale
di avampiede eventualmente abbinate alla realizzazione di
ortesi plantari con un sostegno in grado di allargare il
ventaglio metatarsale."
        ],
        "quinto-dito-varo" => [
            "name" => "Quinto Dito Varo",
            "img" => "quintoVaro.jpg",
            "cause" => "Le cause sono prevalentemente di natura meccanica ossia
legate ad un appoggio non corretto che porta ad una
sollecitazione eccessiva della fascia esterna
dell’avampiede, non devono però essere trascurate
patologie reumatoidi o neurologiche.",
            "sintomi" => "I sintomi sono relativi allo sfregamento che si genera tra
quarto e quinto dito oppure tra la sporgenza della quinta
testa metatarsale e la calzatura, con quadri infiammatori
caratterizzati da borsiti, lesioni e formazioni cheratosiche
interdigitali.",
            "cura" => "Fondamentale è la terapia conservativa di prevenzione
mediante la realizzazione di ortesi plantari atte ad evitare
la deformazione in abduzione del quinto metatarso e
conseguente adduzione-inversione del quinto dito."
        ],
    ];

    return view('patologie.show', ["name" => $name, "patologie" => $patologie]);
});
