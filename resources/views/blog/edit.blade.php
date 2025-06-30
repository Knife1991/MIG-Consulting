<x-layout>
    <div class="container mt-5">
        <!-- Pulsante Torna alla Dashboard -->
        <div class="mb-4">
            <a href="{{ route('posts.dashboard') }}" class="btn bottoneMOD shadow">← Torna alla dashboard</a>
        </div>

        <div class="d-flex justify-content-center mb-5">
            <div class="w-100" style="max-width: 800px;">
                <h2 class="mb-4 text-center">Modifica Articolo</h2>

                <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Titolo</label>
                        <input type="text" name="title" value="{{ $post->title }}" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label for="body" class="form-label fw-bold">Contenuto dell’articolo</label>
                        <textarea id="body" name="body" class="form-control" rows="10">{{ old('body', $post->body ?? '') }}</textarea>
                    </div>                                      

                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold">Immagine di copertina (opzionale)</label>
                        <input type="file" name="image" id="image" accept="image/*" class="form-control">

                        <!-- Anteprima immagine -->
                        <div class="mt-2" id="imagePreviewContainer" style="{{ $post->image_url ? '' : 'display:none;' }}">
                            <img id="imagePreview" 
                                src="{{ $post->image_url ?? '#' }}" 
                                alt="Anteprima immagine" 
                                style="max-width: 300px; height: auto; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                    </div>

                    <button type="submit" class="btn bottoneAGG">Aggiorna</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Preview immagine live per modifica articolo
        document.getElementById('image').addEventListener('change', function(e) {
            const [file] = e.target.files;
            const previewContainer = document.getElementById('imagePreviewContainer');
            const previewImage = document.getElementById('imagePreview');
            if (file) {
                previewImage.src = URL.createObjectURL(file);
                previewContainer.style.display = 'block';
            } else {
                previewContainer.style.display = '{{ $post->image_url ? "block" : "none" }}';
                previewImage.src = '{{ $post->image_url ?? "#" }}';
            }
        });
    </script>
</x-layout>
