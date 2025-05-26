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
                    
                    <!-- TITOLO -->
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Titolo</label>
                        <input id="title" type="hidden" name="title" value="{{ old('title', $post->title ?? '') }}">
                        <trix-editor input="title"></trix-editor>
                        <!-- Toolbar personalizzata per il titolo, posizionata sotto editor -->
                        <trix-toolbar id="title-toolbar">
                            <div class="trix-button-row">
                                <span class="trix-button-group trix-button-group--text-tools">
                                    <button type="button" class="trix-button trix-button--icon trix-button--icon-bold" data-trix-attribute="bold" title="Grassetto" tabindex="-1">B</button>
                                    <button type="button" class="trix-button trix-button--icon trix-button--icon-italic" data-trix-attribute="italic" title="Corsivo" tabindex="-1">I</button>
                                    <button type="button" class="trix-button trix-button--icon trix-button--button-underline" data-trix-attribute="underline" title="Sottolineato" tabindex="-1">U</button>
                                </span>
                            </div>
                        </trix-toolbar>
                    </div>

                    <!-- CONTENUTO -->
                    <div class="mb-4">
                        <label for="body" class="form-label fw-bold">Contenuto dell’articolo</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body ?? '') }}">
                        <trix-editor input="body"></trix-editor>
                        <!-- Toolbar di default per body sotto editor -->
                        <trix-toolbar id="body-toolbar"></trix-toolbar>
                    </div>
                    
                    <!-- IMMAGINE -->
                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold">Immagine di copertina</label>
                        <input type="file" name="image" id="image" accept="image/*" class="form-control">
                    </div>
                    
                    <!-- Anteprima immagine -->
                    <div class="mb-3 fw-bold" id="imagePreviewContainer" style="display:none;">
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

        // Associa toolbar personalizzate a trix-editor (solo per titolo)
        document.addEventListener('trix-initialize', function(event) {
            if (event.target.inputElement.id === 'title') {
                event.target.toolbarElement.remove(); // rimuove toolbar default sopra editor
                const toolbar = document.getElementById('title-toolbar');
                event.target.toolbarElement = toolbar;
                toolbar.style.display = 'block'; // mostra la toolbar personalizzata sotto editor
            }
            if (event.target.inputElement.id === 'body') {
                event.target.toolbarElement.remove(); // rimuove toolbar default sopra editor
                const toolbar = document.getElementById('body-toolbar');
                event.target.toolbarElement = toolbar;
                toolbar.style.display = 'block'; // mostra toolbar vuota sotto editor (puoi personalizzare se vuoi)
            }
        });
    </script>

    <style>
        /* Nascondi toolbar default sopra gli editor */
        trix-toolbar {
            margin-top: 4px;
            margin-bottom: 8px;
        }
        /* Fai apparire la toolbar sempre sotto l'editor */
        /* Eventuali personalizzazioni */
    </style>
</x-layout>
