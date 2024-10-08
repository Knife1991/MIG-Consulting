<div class="container">
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 border-top">
    <!-- Logo e informazioni -->
    <div class="col mb-3 text-center text-md-start">
      <a href="/" class="d-flex align-items-center mb-3 justify-content-center justify-content-md-start link-body-emphasis text-decoration-none">
        <img class="logo_nav" src="img/Logonav.png" alt="Logo aziendale">
      </a>
      <p class="text-body-secondary">P.IVA: 04516050715</p>
      <p class="text-body-secondary powered">Powered by <br> Merola Giuseppe - Web Developer <br> © 2024</p>
    </div>

    <!-- Spazio vuoto per mantenere la struttura -->
    <div class="col mb-3 d-none d-md-block">
    </div>
    <div class="col mb-3 d-none d-md-block">
    </div>

    <!-- Link principali -->
    <div class="col mb-3 d-none d-md-block">
      <h5>MIG Consulting</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="{{route('welcome')}}" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="{{route('chiSiamo')}}" class="nav-link p-0 text-body-secondary">Chi siamo</a></li>
        <li class="nav-item mb-2"><a href="{{route('consulenza-aziendale')}}" class="nav-link p-0 text-body-secondary">Consulenza Aziendale</a></li>
        <li class="nav-item mb-2"><a href="{{route('contatti')}}" class="nav-link p-0 text-body-secondary">Contatti</a></li>
        <li class="nav-item mb-2"><a href="{{route('privacy')}}" class="nav-link p-0 text-body-secondary">Privacy Policy</a></li>
      </ul>
    </div>

    <!-- Social -->
    <div class="col mb-3 text-center">
      <h5>Social</h5>
      <ul class="nav justify-content-md-center justify-content-center">
        <li class="nav-item mb-2">
          <a target="_blank" href="https://www.linkedin.com/company/mig-consulting-it/" class="nav-link p-0 text-body-secondary">
            <i class="bi bi-linkedin fs-2 icone_footer"></i>
          </a>
        </li>
        <li class="nav-item mb-2">
          <a target="_blank" href="https://www.facebook.com/share/fH7MsH3DNWaSJeDa/?mibextid=LQQJ4d" class="nav-link p-0 text-body-secondary">
            <i class="bi bi-facebook fs-2 icone_footer"></i>
          </a>
        </li>
        {{-- <li class="nav-item mb-2">
          <a href="#" class="nav-link p-0 text-body-secondary">
            <i class="bi bi-instagram fs-2 icone_footer"></i>
          </a>
        </li> --}}
      </ul>
    </div>
  </footer>
</div>
