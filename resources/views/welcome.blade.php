@extends('layouts.public.master')

@section('content')

<div class="" ng-controller="WelcomeController">
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Benvenuti</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Sito ufficiale del Gruppo Urani, per essere sempre informati sugli eventi che scalderanno le notti della cittadina di confine.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{URL::asset('assets/images/home/principal.jpg')}}" alt="..." /></div>
            </div>
        </div>
    </header>
    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="{{ URL::asset('assets/images/home/boffalpenz.jpg')}}" alt="..." />
                        <div class="card-body p-4">
                           <!-- <div class="badge bg-primary bg-gradient rounded-pill mb-2">Feste Boff...al Penz!</div>-->
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Feste Boff...al Penz!</h5></a>
                            <p class="card-text mb-0">Le tradizionali feste estive del Gruppo Urani che si svolgono nella seconda metà di luglio culminando con la festa Nazionale il 1° d&#039agosto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="{{URL::asset('assets/images/home/carnevale.jpg')}}" alt="..." />
                        <div class="card-body p-4">
                           <!-- <div class="badge bg-primary bg-gradient rounded-pill mb-2">Feste Boff...al Penz!</div>-->
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Carnevale</h5></a>
                            <p class="card-text mb-0">Tradizionalmente attivi durante il periodo carnevalesco con la distribuzione del risotto a tutta la popolazione chiassese.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="{{URL::asset('assets/images/home/risotto.jpg')}}" alt="..." />
                        <div class="card-body p-4">
                            <!-- <div class="badge bg-primary bg-gradient rounded-pill mb-2">Feste Boff...al Penz!</div>-->
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Eventi pubblici e privati</h5></a>
                            <p class="card-text mb-0">La nostra sede può essere utilizzata per eventi pubblici e privati, clicca qui per vedere i dettagli e il regolamento d&#039agostoaffitto.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection
