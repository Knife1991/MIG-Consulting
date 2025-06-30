<x-layout>
    <div class="container mt-5">
        <h2 class="mb-5 fw-bold text-center">Articoli del Blog</h2>

        @auth
            <div class="text-center mb-4">
                <a href="{{ route('blog.create') }}" class="btn bottoneAGG shadow">
                    + Crea Nuovo Articolo
                </a>
            </div>
        @endauth

        @if ($posts->isEmpty())
            <div class="text-center my-5">
                <h4 class="text-muted">Gli articoli stanno arrivando, stay tuned!</h4>
            </div>
        @else

            {{-- VERSIONE DESKTOP --}}
            <div class="row d-none d-lg-flex">
                {{-- Colonna Sinistra --}}
                <div class="col-lg-6 mb-4 border-end">
                    @php $mainPost = $posts->first(); @endphp
                    @if($mainPost)
                        <a href="{{ route('blog.show', $mainPost->slug) }}" class="text-decoration-none text-dark">
                            <div class="card border-0 bg-transparent h-100">
                                @if($mainPost->image_url)
                                    <img src="{{ $mainPost->image_url }}" class="card-img-top rounded-top" alt="{{ $mainPost->title }}" style="max-height: 400px; object-fit: cover;">
                                @endif
                                <div class="card-body text-center">
                                    <h2 class="fw-bold">{!! $mainPost->title !!}</h2>
                                    <p>{{ Str::limit(strip_tags($mainPost->body), 200, '...') }}</p>
                                    @if($mainPost->author)
                                        <p class="text-muted">{{ $mainPost->author->name }}</p>
                                    @endif
                                </div>
                            </div>
                        </a>
                    @endif
                </div>

                {{-- Colonna Centrale --}}
                <div class="col-lg-3 mb-4 border-end">
                    @foreach($posts->slice(1, 2) as $post)
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-decoration-none text-dark mb-4 d-block">
                            <div class="card border-0 bg-transparent mb-4">
                                @if($post->image_url)
                                    <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}" style="max-height: 200px; object-fit: cover;">
                                @endif
                                <div class="card-body">
                                    <h5 class="fs-4 card-title fw-semibold">{!! $post->title !!}</h5>
                                    <p class="card-text">{{ Str::limit(strip_tags($post->body), 100, '...') }}</p>
                                    @if($post->author)
                                        <p class="text-muted mb-1">{{ $post->author->name }}</p>
                                    @endif
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                {{-- Colonna Destra --}}
                <div class="col-lg-3">
                    @foreach($posts->slice(3, 4) as $post)
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-decoration-none text-dark mb-3 d-block">
                            <div class="p-3 border-bottom">
                                <h6 class="fs-5 fw-semibold mb-1">{!! $post->title !!}</h6>
                                <p class="mb-0">{{ Str::limit(strip_tags($post->body), 80, '...') }}</p>
                                @if($post->author)
                                    <p class="text-muted mb-1">{{ $post->author->name }}</p>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- VERSIONE MOBILE --}}
            <div class="d-lg-none">
                @foreach($posts as $post)
                    <a href="{{ route('blog.show', $post->slug) }}" class="text-decoration-none text-dark d-block mb-3">
                        <div class="card mb-3 shadow-sm">
                            @if($post->image_url)
                                <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}" style="max-height: 250px; object-fit: cover;">
                            @endif
                            <div class="card-body">
                                <h5 class="fw-bold">{!! $post->title !!}</h5>
                                <p>{{ Str::limit(strip_tags($post->body), 120, '...') }}</p>
                                @if($post->author)
                                    <p class="text-muted small">{{ $post->author->name }}</p>
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="d-flex justify-content-end mt-3">
                <a href="{{ route('blog.archivio') }}" class="text-decoration-none fs-5 link_tutti ">
                    Vedi tutti gli articoli...
                </a>
            </div>            

            {{-- PAGINAZIONE --}}
            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</x-layout>
