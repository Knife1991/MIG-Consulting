<x-layout>
    
    <header class="masthead2">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12 text-center text-md-start">
                    <h1 class="display-3 fw-bold text-white mb-5">CONTATTI</h1>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container mt-5 pt-5">
        <div class="row text-center">
            <!-- Colonna 1 -->
            <div class="col-12 col-md-4 mb-4">
                <div>
                    <i class="bi bi-pin-map-fill simboli_contatti shadow"></i>
                </div>
                <div class="mt-5">
                    <a href="https://maps.app.goo.gl/KRmKRjEXqEyW5Faj6" class="fs-5 link_contatti" target="_blank">Via Cimarrusti 72 <br> Manfredonia (FG) 71043</a>
                </div>
            </div>
            <!-- Colonna 2 -->
            <div class="col-12 col-md-4 mb-4 mt-5 mt-md-0">
                <div>
                    <i class="bi bi-telephone-inbound simboli_contatti shadow"></i>
                </div>
                <div class="mt-5">
                    <a href="https://wa.me/3461338998" target="_blank" class="fs-5 link_contatti">Cell: 3461338998</a>
                </div>
            </div>
            <!-- Colonna 3 -->
            <div class="col-12 col-md-4 mb-4 mt-5 mt-md-0">
                <div>
                    <i class="bi bi-envelope-at simboli_contatti shadow"></i>
                </div>
                <div class="mt-5">
                    <a href="mailto:merolam65@gmail.com" class="fs-5 link_contatti">merolam65@gmail.com</a>
                </div>
            </div>
        </div>
        <div class="row mt-5 pt-5 mt-md-3">
            <div class="col-12">
                <div class="mb-5">
                    <h2 class="fw-normal fs-1 text-center title bordo4 d-block mx-auto">Social</h2>
                    <div class="d-flex justify-content-center mt-5">
                        <a target="_blank" href="https://www.facebook.com/share/fH7MsH3DNWaSJeDa/?mibextid=LQQJ4d">
                            <i class="bi bi-facebook icone_social facebook mx-5"></i>
                        </a>
                        {{-- <a href="">
                            <img class="instagram" src="{{Storage::url('../../storage/public/img/instagram.png')}}" alt="">
                        </a> --}}
                        <a target="_blank" href="https://www.linkedin.com/company/mig-consulting-it/">
                            <i class="bi bi-linkedin icone_social linkedin mx-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    
    {{-- Form --}}
    <div class="container px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 rounded-3 shadow-lg">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="h1 fw-light">Contattaci</div>
                            <p class="mb-4 text-muted">Scrivici, ti risponderemo al piú presto!</p>
                        </div>
                        
                        
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN"
                        method="POST"
                        action="{{route('contact.submit')}}"
                        >
                        @csrf
                        
                        <!-- Name Input -->
                        <div class="form-floating mb-3">
                            <input name="nome" class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                            <label for="name">Nome e Cognome</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Il nome e il cognome sono obbligatori.</div>
                        </div>
                        
                        <!-- Email Input -->
                        <div class="form-floating mb-3">
                            <input name="email" class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                            <label for="emailAddress">Indirizzo email</label>
                            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">L'indirizzo email è obbligatorio.</div>
                            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">L'indirizzo email non è valido.</div>
                        </div>
                        
                        <!-- Message Input -->
                        <div class="form-floating mb-3">
                            <textarea name="body" class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                            <label for="message">Messaggio</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Il corpo del messaggio è obbligatorio.</div>
                        </div>
                        
                        <!-- Submit button -->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Invia</button>
                        </div>
                    </form>
                    <!-- End of contact form -->
                    
                </div>
            </div>
        </div>
    </div>
</div>





</x-layout>