<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Offcanvas navbar large">
    <div class="container-fluid px-md-5">
      <a class="navbar-brand" href="#">
        <img class="logo_nav" src="{{Storage::url('img/Logonav.png')}}" alt="Logo aziendale">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">MIG Consulting</h5>
          <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 fs-5">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('welcome')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('chiSiamo')}}">Chi siamo</a>
            </li>
            <li class="nav-item dropdown d-none">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Formazione
              </a>
              <ul class="dropdown-menu">
                <li class="mb-2">
                  <a class="dropdown-item" href="{{route('formazioneOperativa')}}">Formazione Operativa</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('formazioneRuolo')}}">Formazione di Ruolo</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('consulenza-aziendale')}}">Consulenza Aziendale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('contatti')}}">Contatti</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>