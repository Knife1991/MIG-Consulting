<x-layout>
    <!-- Pulsante a sinistra in alto -->
    <div class="container-fluid px-3 mt-5">
        <a class="btn btn-secondary shadow" href="{{ route('blog.index') }}">← Torna agli articoli</a>
    </div>

    <div class="container my-3 p-5 shadow" style="max-width: 1024px;">
        
        @if($post->image_url ?? false)
            <img src="{{ $post->image_url }}" alt="{{ strip_tags($post->title) }}" 
                 class="img-fluid rounded mb-4"
                 style="max-height: 400px; width: 100%; object-fit: cover;">
        @endif

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
</x-layout>
