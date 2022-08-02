@extends('layouts.public.master')

@section('content')

<div class="" ng-controller="">
    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-3">La nostra storia...</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About section one-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5" style="max-width: 1650px!important;">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-5"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{url('assets/images/about/1.jpg')}}" alt="..." /></div>
                <div class="col-lg-7">
                    <h2 class="fw-bolder">Comitato autonomo</h2>
                    <p class="lead fw-normal text-muted mb-0">Già nel decennio 1920/1930 un gruppo di amici denominato qualche volta "Comitato autonomo", qualche altra "Gli amici di Boffalora", o altra ancora "Comitato spontaneo" si dava da fare per organizzare le Feste di Sant&#039Anna nell&#039ampio parco del Boffalorino di proprietà dei signori Valsangiacomo, con cantina, ballo e concerto della Musica Cittadina o del Männerchor o di entrambi. In particolare nel 1927 le Feste furono organizzate da un gruppo definitosi "Allegria benefica" il cui comitato era cosiì composto: presidente Benedetto Valsangiacomo, vice-presidente Leonzio Carò, segretario Luigi Corti, cassiere Emilio Corti e membri Cosimo Lurà, Amedeo Bernasconi, Alberto Canova, Martino Filippini, Valentino Gerosa, Celso Mascetti. É solamente nel 1932 che si ha notizia degli "Urani di Boffalora" o meglio di quel gruppo di amici di Boffalora che assumeva per la prima volta il nome di Urani e, oltre alle feste di Sant&#039Anna a fine luglio, si assumeva pure l&#039organizzazione della cucinatura del risotto di carnevale e la relativa gratuita distribuzione alla popolazione. Ora viene da chiedersi: come mai "Urani"? Qual è la vera origine del nome di questo gruppo di allegri compagni? Differenti sono le tesi a tal riguardo; noi però non esitiamo ad abbracciarne che una sola: quella che mette in relazione il nome di "Urani" con la rappresentazione del famoso spettacolo del Guglielmo Tell, dato per la prima volta proprio nel 1932 dalla locale Società Filodrammatica "Delectando beneficat".</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About section two-->
    <section class="py-5">
        <div class="container px-5 my-5" style="max-width: 1650px!important;">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-5 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{url('assets/images/about/2.jpg')}}" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Filodrammatica </h2>
                    <p class="lead fw-normal text-muted mb-0">Filodrammatica particolarmente attiva, che nel 1930 aveva messo in scena un&#039interessante versione in formato ridotto de "I promessi sposi" al Politeama e, visto l&#039enorme successo, ritenne di passare a uno spettacolo assai più impegnativo quale appunto il Guglielmo Tell di Schiller. Essendo troppo piccolo il Politeama per la grandiosità delle scene che si volevano allestire, fu creato un grande apparato scenografico con un vastissimo palcoscenico che copriva tutta la rientranza fra le due ali posteriori del Palazzo scolastico e le superava verso il piazzale retrostante, aveva addirittura due rampe di proscenio che permettevano l&#039accesso delle masse di attori e persino degli animali. Fra i bravissimi attori ricordiamo Riziero Muscionico e la sorella Vittorina, Giotto Cambi, Dante Camponovo "Danton", Antonio Canova.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About section three-->
    <section class="py-5  bg-light">
        <div class="container px-5 my-5" style="max-width: 1650px!important;">
            <div class="row gx-5 align-items-center">

                <div class="col-lg-7">
                    <h2 class="fw-bolder">Il Gruppo Urani</h2>
                    <p class="lead fw-normal text-muted mb-0">Lo spettacolo fu rappresentato la prima volta nel 1932, come già detto, e, visto l&#039enorme successo, replicato nel 1934. Ed è proprio il primo attore della compagnia Riziero Muscionico che sull&#039Almanacco di vita chiassese del 1979, così spiegava "Perché si chiamano Urani". "Quando ai primi di giugno del 1932, le prove del GUGLIELMO TELL erano ormai entrate nel vivo, fu necessario reclutare un buon numero di giovani volonterosi che si prestassero a creare il contorno di popolo e armigeri che la scena richiedeva. Le prove di assieme e di massa si tenevano nel vasto salone che fu l&#039Albergo Colonne in un&#039atmosfera entusiasta e festosa. Una sera si trattò di organizzare i gruppi che rappresentassero i tre Cantoni di Uri, Svitto e Untervaldo per la scena del giuramento del Grütli. Durante la discussione, Dante Camponovo (Danton), come avesse ricevuto un improvviso pizzicotto, balzò in piedi e, scegliendo un gruppo di persone fra i tanti suoi amici del rione di Boffalora, esclamò: - NOI FACCIAMO IL GRUPPO URANO! - Quando poi alcuni altri giovanotti domandarono di aggregarsi al gruppo, Dante, con voce decisa, rispose: – Ah no cari, voi non siete del nostro quartiere, NOI SIAMO URANI E SIAMO DURI... andate in un altro Cantone, se volete! - E così fu! Nelle susseguenti prove e nelle numerose recite (ben 7) davanti a migliaia di spettatori, gli URANI rimasero sempre compatti e disciplinati, svolgendo onorevolmente il compito loro affidato. Cosiì in un clima di amicizia che la giovinezza ancor più rinsaldava, nacquero gli URANI e così rimasero nel passato e nel presente "GLI URANI QUELLI D&#039URI".</p>
                </div>
                <div class="col-lg-5 order-first"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{url('assets/images/about/3.jpg')}}" alt="..." /></div>
            </div>
        </div>
    </section>
</div>
@endsection
