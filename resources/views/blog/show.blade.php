<x-layout :post="$post">

    <!-- Pulsante a sinistra in alto -->
    <div class="container-fluid px-3 mt-5">
        <a class="btn btn-secondary shadow" href="{{ route('blog.index') }}">← Torna agli articoli</a>
        @auth
        <div class="my-3">
            <a href="{{ route('posts.dashboard') }}" class="btn bottoneMOD shadow">Vai alla dashboard</a>
        </div>
        @endauth
    </div>

    <div class="container corpoArticolo my-3 p-3 shadow">
        
        @if($post->image_url ?? false)
            <img src="{{ $post->image_url }}" alt="{{ strip_tags($post->title) }}" 
                 class="img-fluid rounded mb-4"
                 style="max-height: 400px; width: 100%; object-fit: cover;">
        @endif

        <h1>{!! $post->title !!}</h1>

        <div class="mt-4">
            {!! $post->body !!}
        </div>

        <!-- MENU CONDIVISIONE LATERALE DA PC -->
        <div class="d-none d-md-flex flex-column position-fixed" style="top: 220px; right: 20px; z-index: 10;">
            <p class="condividi">Condividi</p>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-outline-primary mb-2" title="Condividi su Facebook">
                <i class="bi bi-facebook fs-4"></i>
            </a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-outline-info mb-2" title="Condividi su LinkedIn">
                <i class="bi bi-linkedin fs-4"></i>
            </a>
            <a href="https://api.whatsapp.com/send?text={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-outline-success mb-2" title="Condividi su WhatsApp">
                <i class="bi bi-whatsapp fs-4"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-outline-info mb-2" title="Condividi su X">
                <i class="bi bi-x fs-4"></i>
            </a>
            <button class="btn btn-outline-secondary" onclick="navigator.clipboard.writeText('{{ request()->fullUrl() }}')" title="Copia link">
                <i class="bi bi-clipboard fs-4"></i>
            </button>
        </div>

        <!-- SEZIONE AUTORE E NEWSLETTER CON BOTTONE CONDIVIDI MOBILE -->
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4 mt-5 px-md-5">
            <div class="d-flex align-items-center justify-content-between w-100 d-md-block">
                <div>
                    <h6>Autore</h6>
                    <p class="mb-0">{{ $post->author?->name ?? 'Autore sconosciuto' }}</p>
                </div>
                <!-- Pulsante condividi solo mobile -->
                <div class="d-md-none">
                    <div class="dropdown">
                        <button class="btn btn-light shadow" type="button" id="socialDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Condividi 📲</i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="socialDropdown">
                            <li>
                                <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                    <i class="bi bi-facebook me-2"></i>Facebook
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode($post->title) }}" target="_blank">
                                    <i class="bi bi-linkedin me-2"></i>LinkedIn
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://wa.me/?text={{ urlencode($post->title) }}%20{{ urlencode(request()->fullUrl()) }}" target="_blank">
                                    <i class="bi bi-whatsapp me-2"></i>WhatsApp
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://x.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                    <i class="bi bi-twitter-x me-2"></i>X
                                </a>
                            </li>
                            <li>
                                <button class="dropdown-item" onclick="navigator.clipboard.writeText('{{ request()->fullUrl() }}')">
                                    <i class="bi bi-clipboard me-2"></i>Copia link
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="col-12 col-md-6 order-2 order-md-1">
                <div class="ml-embedded" data-form="GgDHUs" style="min-width: 100%;"></div>
            </div>
            
        </div>
    </div>
</x-layout>


