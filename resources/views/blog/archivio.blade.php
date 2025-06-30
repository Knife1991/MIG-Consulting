<x-layout>
    <div class="container mt-5">
        <h2 class="mb-4 fw-bold text-center">Archivio Articoli</h2>

        <div class="row">
            @foreach($allPosts as $post)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('blog.show', $post->slug) }}" class="text-decoration-none text-dark">
                        <div class="card shadow-sm h-100">
                            @if($post->image_url)
                                <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}" style="max-height: 200px; object-fit: cover;">
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="fw-bold">{!! $post->title !!}</h5>
                                <p>{{ Str::limit(strip_tags($post->body), 120, '...') }}</p>
                                @if($post->author)
                                    <p class="text-muted small mt-auto">{{ $post->author->name }}</p>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $allPosts->links() }}
        </div>
    </div>
</x-layout>
