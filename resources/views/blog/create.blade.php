<x-layout>
    <div class="container mt-5">
        <!-- Pulsante Torna indietro -->
        <div class="mb-4">
            <a class="btn btn-secondary shadow" href="{{ route('blog.index') }}">← Torna agli articoli</a>
        </div>
        <div class="mb-4">
            <a href="{{ route('posts.dashboard') }}" class="btn bottoneMOD shadow">Vai alla dashboard</a>
        </div>
        
        <div class="d-flex justify-content-center mb-5">
            <div class="w-100" style="max-width: 800px;">
                <h2 class="mb-4 text-center">Crea un nuovo articolo</h2>
                
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Errore!</strong> Ci sono problemi con l'immagine o altri campi.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="body" class="form-label fw-bold">Contenuto dell’articolo</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body ?? '') }}">
                        <trix-editor input="body"></trix-editor>
                    </div>
                    
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine di copertina</label>
                        <input type="file" name="image" id="image" accept="image/*" class="form-control">
                    </div>
                    
                    <!-- Anteprima immagine -->
                    <div class="mb-3" id="imagePreviewContainer" style="display:none;">
                        <p>Anteprima immagine:</p>
                        <img id="imagePreview" src="#" alt="Anteprima immagine" style="max-width:100%; max-height:300px; object-fit:contain; border:1px solid #ddd; border-radius:4px;">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Pubblica</button>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        // Preview immagine live
        document.getElementById('image').addEventListener('change', function(e) {
            const [file] = e.target.files;
            const previewContainer = document.getElementById('imagePreviewContainer');
            const previewImage = document.getElementById('imagePreview');
            if (file) {
                previewImage.src = URL.createObjectURL(file);
                previewContainer.style.display = 'block';
            } else {
                previewContainer.style.display = 'none';
                previewImage.src = '#';
            }
        });
    </script>
</x-layout>
