<x-layout>
    <div class="container mt-5">
        <h2 class="mb-4 fw-bold">Articoli del Blog</h2>

        @auth
            <a href="{{ route('blog.create') }}" class="btn bottoneAGG shadow mb-4">
                + Crea Nuovo Articolo
            </a>
        @endauth

        @if ($posts->isEmpty())
            <div class="text-center my-5">
                <h4 class="text-muted">Gli articoli stanno arrivando, stay tuned!</h4>
            </div>
        @else
            <div class="row g-4">
                @foreach ($posts as $post)
                    <div class="col-md-6">
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm border-0 rounded-3 hover-shadow" style="transition: transform 0.2s; cursor: pointer;">
                                @if($post->image_url ?? false)
                                    <img src="{{ $post->image_url }}" 
                                         class="card-img-top rounded-top" 
                                         alt="{{ $post->title }}"
                                         style="max-height: 250px; object-fit: cover; width: 100%;">
                                @endif
                                <div class="card-body d-flex flex-column">
                                    <h3 class="card-title fw-semibold">{!! $post->title !!}</h3>
                                    <p class="text-muted mb-2 small">
                                        Pubblicato il {{ $post->created_at->format('d M Y') }}
                                        @if($post->author)
                                            • di {{ $post->author->name }}
                                        @endif
                                    </p>
                                    <p class="card-text flex-grow-1">
                                        {{ Str::limit(strip_tags($post->body), 180, '...') }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>          
                @endforeach
            </div>

            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</x-layout>
