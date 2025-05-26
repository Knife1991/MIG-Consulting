<div class="container">
  <footer class="row pt-5 border-top justify-content-between">

    <!-- Logo e informazioni -->
    <div class="col-12 col-md-3 mb-4 text-center text-md-start">
      <a href="/" class="d-flex align-items-center mb-3 justify-content-center justify-content-md-start link-body-emphasis text-decoration-none">
        <img class="logo_nav" src="{{ asset('img/Logonav.png') }}" alt="Logo aziendale">
      </a>
      <p class="text-body-secondary">P.IVA: 04516050715</p>
      <p class="text-body-secondary powered">Powered by <br> Merola Giuseppe - Web Developer <br> © 2024</p>
    </div>

    <!-- Link principali -->
    <div class="col-12 col-md-3 mb-4 text-center text-md-start">
      <h5>MIG Consulting</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="{{route('welcome')}}" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="{{route('chiSiamo')}}" class="nav-link p-0 text-body-secondary">Chi siamo</a></li>
        <li class="nav-item mb-2"><a href="{{route('formazioneOperativa')}}" class="nav-link p-0 text-body-secondary">Formazione Operativa</a></li>
        <li class="nav-item mb-2"><a href="{{route('formazioneRuolo')}}" class="nav-link p-0 text-body-secondary">Formazione di ruolo</a></li>
        <li class="nav-item mb-2"><a href="{{route('consulenza-aziendale')}}" class="nav-link p-0 text-body-secondary">Consulenza Aziendale</a></li>
        <li class="nav-item mb-2"><a href="{{route('contatti')}}" class="nav-link p-0 text-body-secondary">Contatti</a></li>
        <li class="nav-item mb-2"><a href="{{route('privacy')}}" class="nav-link p-0 text-body-secondary">Privacy Policy</a></li>
      </ul>
    </div>

    <!-- Social -->
    <div class="col-12 col-md-2 mb-4 text-center">
      <h5>Social</h5>
      <ul class="nav justify-content-center">
        <li class="nav-item mx-2">
          <a target="_blank" href="https://www.linkedin.com/company/mig-consulting-it/" class="nav-link p-0 text-body-secondary">
            <i class="bi bi-linkedin fs-2 icone_footer"></i>
          </a>
        </li>
        <li class="nav-item mx-2">
          <a target="_blank" href="https://www.facebook.com/share/fH7MsH3DNWaSJeDa/?mibextid=LQQJ4d" class="nav-link p-0 text-body-secondary">
            <i class="bi bi-facebook fs-2 icone_footer"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Newsletter -->
    <div class="col-12 col-md-4 mb-4 text-center">
      <div class="ml-embedded" data-form="GgDHUs"></div>
    </div>

  </footer>
</div>
