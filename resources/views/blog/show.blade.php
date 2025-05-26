<x-layout>
    @php
        $shareUrl = urlencode(request()->fullUrl());
        $shareTitle = urlencode(strip_tags($post->title));
    @endphp

    <!-- MENU SOCIAL DESKTOP -->
    <div class="d-none d-md-flex flex-column position-fixed" style="top: 50%; right: 15px; transform: translateY(-50%); z-index: 1000;">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" class="btn btn-outline-primary mb-2" title="Condividi su Facebook">
            <i class="bi bi-facebook fs-4"></i>
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}&title={{ $shareTitle }}" target="_blank" class="btn btn-outline-info mb-2" title="Condividi su LinkedIn">
            <i class="bi bi-linkedin fs-4"></i>
        </a>
        <a href="https://wa.me/?text={{ $shareTitle }}%20{{ $shareUrl }}" target="_blank" class="btn btn-outline-success mb-2" title="Condividi su WhatsApp">
            <i class="bi bi-whatsapp fs-4"></i>
        </a>
        <a href="https://x.com/intent/tweet?text={{ $shareTitle }}&url={{ $shareUrl }}" target="_blank" class="btn btn-outline-dark mb-2" title="Condividi su X">
            <i class="bi bi-twitter-x fs-4"></i>
        </a>
        <button onclick="navigator.clipboard.writeText(decodeURIComponent('{{ $shareUrl }}'))" class="btn btn-outline-secondary" title="Copia link">
            <i class="bi bi-clipboard fs-4"></i>
        </button>
    </div>

    <!-- Pulsanti in alto -->
    <div class="container-fluid px-3 mt-5">
        <a class="btn btn-secondary shadow" href="{{ route('blog.index') }}">← Torna agli articoli</a>
        @auth
        <div class="my-3">
            <a href="{{ route('posts.dashboard') }}" class="btn bottoneMOD shadow">Vai alla dashboard</a>
        </div>
        @endauth
    </div>

    <!-- CARD ARTICOLO -->
    <div class="container my-3 p-0 shadow" style="max-width: 1024px; position: relative;">

        <!-- MENU 3 PUNTINI MOBILE SOVRAPPOSTO IMMAGINE -->
        <div class="d-md-none position-absolute" style="top: 10px; right: 10px; z-index: 10;">
            <div class="dropup">
                <button class="btn btn-light" type="button" id="socialDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical fs-5"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="socialDropdown">
                    <li>
                        <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank">
                            <i class="bi bi-facebook me-2"></i>Facebook
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="https://www.linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}&title={{ $shareTitle }}" target="_blank">
                            <i class="bi bi-linkedin me-2"></i>LinkedIn
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="https://wa.me/?text={{ $shareTitle }}%20{{ $shareUrl }}" target="_blank">
                            <i class="bi bi-whatsapp me-2"></i>WhatsApp
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="https://x.com/intent/tweet?text={{ $shareTitle }}&url={{ $shareUrl }}" target="_blank">
                            <i class="bi bi-twitter-x me-2"></i>X
                        </a>
                    </li>
                    <li>
                        <button class="dropdown-item" onclick="navigator.clipboard.writeText(decodeURIComponent('{{ $shareUrl }}'))">
                            <i class="bi bi-clipboard me-2"></i>Copia link
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- IMMAGINE -->
        @if($post->image_url ?? false)
            <img src="{{ $post->image_url }}" alt="{{ strip_tags($post->title) }}" 
                class="img-fluid rounded-top"
                style="max-height: 400px; width: 100%; object-fit: cover;">
        @endif

        <!-- CONTENUTO ARTICOLO -->
        <div class="p-5">
            <h1>{!! $post->title !!}</h1>

            <div class="mt-4">
                {!! $post->body !!}
            </div>

            <div class="d-flex justify-content-between align-items-start flex-wrap mt-5">
                <div class="ml-embedded me-5" data-form="GgDHUs" style="min-width: 300px;"></div>
                <div>
                    <h6>Autore</h6>
                    <p class="mb-0">{{ $post->author?->name ?? 'Autore sconosciuto' }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
