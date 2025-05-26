<x-layout>
    <div class="container mt-5">
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

                    <!-- TITOLO -->
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Titolo</label>
                        <input id="title" type="hidden" name="title" value="{{ old('title', $post->title ?? '') }}">
                        
                        <div class="trix-container">
                            <trix-editor input="title" toolbar="title-toolbar"></trix-editor>
                            <!-- Toolbar personalizzata -->
                            <trix-toolbar id="title-toolbar" class="title-toolbar">
                                <div class="trix-button-row">
                                    <span class="trix-button-group trix-button-group--text-tools">
                                        <button type="button" class="trix-button trix-button--icon trix-button--icon-bold" data-trix-attribute="bold" title="Grassetto" tabindex="-1">B</button>
                                        <button type="button" class="trix-button trix-button--icon trix-button--icon-italic" data-trix-attribute="italic" title="Corsivo" tabindex="-1">I</button>
                                    </span>
                                </div>
                            </trix-toolbar>
                        </div>
                    </div>

                    <!-- CONTENUTO -->
                    <div class="mb-4">
                        <label for="body" class="form-label fw-bold">Contenuto dell’articolo</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body ?? '') }}">
                        
                        <div class="trix-container">
                            <trix-editor input="body"></trix-editor>
                        </div>
                    </div>

                    <!-- IMMAGINE -->
                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold">Immagine di copertina</label>
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

    <style>
        /* contenitore per editor + toolbar */
        .trix-container {
            display: flex;
            flex-direction: column;
        }

        /* spostiamo la toolbar sotto l'editor */
        .trix-container trix-editor {
            order: 1;
        }
        .trix-container trix-toolbar {
            order: 2;
            margin-top: 6px;
        }

        /* Per il toolbar personalizzato titolo */
        #title-toolbar .trix-button {
            font-weight: bold;
            font-size: 1.1em;
        }
    </style>
</x-layout>
