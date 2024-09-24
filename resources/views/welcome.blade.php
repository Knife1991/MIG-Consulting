<x-layout>
    
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    
    {{-- Hero --}}
    <header>

        <div class="overlay"></div>
        
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{Storage::url('video/videoHeader.mp4')}}" type="video/mp4">
            </video>
            
            <!-- The header content -->
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3 fw-bold">Esperienza e competenza <br> al tuo servizio</h1>
                        <p class="lead mb-0 fs-4">Siamo il tuo partner strategico per crescere ed innovare</p>
                    </div>
                </div>
            </div>
        </header>
        {{-- End Hero --}}
        
        {{-- Inizio Cit --}}
        <div class="container citazione">
            <div class="row">
                <div class="col-12">
                    <h3 class="lead text-center fs-2">
                        "Le sfide di oggi sono le opportunità di domani: <br>guida il cambiamento, raggiungi l'eccellenza."
                    </h3>
                </div>
            </div>
        </div>
        {{-- End CIt --}}
        
        {{-- Start FT --}}
        <div class="container-fluid marketing my-5">
            <div class="row">
                <div class="col-12 mb-5">
                    <h2 class="fw-normal fs-1 text-center title bordo d-block mx-auto">I NOSTRI SERVIZI</h2>
                </div>
                {{-- <div class="col-12 col-lg-4">
                    <div class="feature p-5 d-flex flex-column justify-content-between shadow rounded">
                        <img src="{{Storage::url('public/img/formazioneOperativa.png')}}" class="img_pills1 rounded-circle d-block mx-auto" alt="">
                        <h2 class="fw-normal text-center title">Formazione Operativa</h2>
                        <p class="text-center">Formazione su competenze pratiche per migliorare l’efficienza e la produttività dei tuoi processi.</p>
                        <p><a class="btn btn-mig d-block mx-auto text-white" href="{{route('formazioneOperativa')}}">Scopri di piú</a></p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="feature p-5 d-flex flex-column justify-content-between shadow rounded">
                        <img src="{{Storage::url('public/img/formazioneDiRuolo.png')}}" class="img_pills2 rounded-circle d-block mx-auto" alt="">
                        <h2 class="fw-normal text-center title">Formazione di Ruolo</h2>
                        <p class="text-center">Potenzia le abilità del personale con una formazione su misura per ogni ruolo aziendale.</p>
                        <p><a class="btn btn-mig d-block mx-auto text-white" href="{{route('formazioneRuolo')}}">Scopri di piú</a></p>
                    </div>
                </div> --}}
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="feature p-5 d-flex flex-column justify-content-between shadow rounded">
                        <img src="{{Storage::url('img/consulenzaAziendale.png')}}" class="img_pills3 rounded-circle d-block mx-auto" alt="">
                        <h2 class="fw-normal text-center title">Consulenza Aziendale</h2>
                        <p class="text-center">Miglioramento dei processi aziendali, ottimizzazione delle operazioni e implementazione di nuove tecnologie.</p>
                        <p><a class="btn btn-mig d-block mx-auto text-white" href="{{route('consulenza-aziendale')}}">Scopri di piú</a></p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End FT --}}
        
        
        {{-- Start WHY --}}
        <div class="container sez_xk">
            <div class="row">
                <div class="col-12 sez_accordion d-block mx-auto shadow py-5">
                    <div class="col-12 mb-5">
                        <h2 class="fw-normal fs-1 text-center title bordo2 d-block mx-auto">PERCHÉ SCEGLIERCI</h2>
                    </div>
                    <div class="d-block mx-auto accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Focus sul Cliente
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-5">La nostra priorità è il successo dei nostri clienti. Lavoriamo a stretto contatto con te, ascoltando le tue esigenze e fornendo supporto continuo per assicurarti di raggiungere i tuoi obiettivi aziendali.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Approccio Personalizzato
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-5">Ogni azienda è unica, e lo sono anche le sue esigenze. Offriamo soluzioni su misura che si adattano perfettamente agli obiettivi e alle sfide specifiche del tuo business, assicurandoci che ogni passo verso il successo sia strategicamente pianificato e implementato.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Risultati Tangibili
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-5">Non ci limitiamo a consulenze teoriche. Il nostro approccio pratico e orientato ai risultati ha portato a un aumento delle performance aziendali e a una crescita significativa per i nostri clienti.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End WHY --}}
        
    </x-layout>