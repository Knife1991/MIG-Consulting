<x-layout>
    <div class="container mt-5">
        <a href="{{ route('blog.create') }}" class="btn bottoneAGG shadow mb-4">
            + Crea Nuovo Articolo
        </a>
        <h2 class="mb-4">I miei articoli</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Corpo</th>
                    <th>Data</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td class="text-truncate">{{ $post->body }}</td>
                        <td>{{ $post->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post) }}" class="btn bottoneMOD btn-sm shadow">Modifica</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Sei sicuro di voler eliminare questo articolo?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn bottoneCANC btn-sm shadow">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $posts->links() }}
    </div>
</x-layout>
