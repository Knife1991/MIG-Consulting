<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class PostController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('post'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|file|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
            $data['image_url'] = '/storage/' . $imagePath;
        }

        // Generazione slug univoco
        $slug = Str::slug($data['title']);
        $originalSlug = $slug;
        $count = 2;
        while (Post::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }
        $data['slug'] = $slug;

        // Associa autore se autenticato
        $data['user_id'] = auth()->id();

        $post = Post::create($data);

        return redirect()->route('blog.show', $post->slug)->with('success', 'Articolo pubblicato!');
    }

    public function dashboard()
    {
        $posts = Post::where('user_id', auth()->id())->latest()->paginate(10);
        return view('blog.dashboard', compact('posts'));
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('blog.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|file|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
            $data['image_url'] = '/storage/' . $imagePath;
        }

        // Se il titolo è stato modificato, aggiorniamo lo slug
        if ($post->title !== $data['title']) {
            $slug = Str::slug($data['title']);
            $originalSlug = $slug;
            $count = 2;
            while (Post::where('slug', $slug)->where('id', '!=', $post->id)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }
            $data['slug'] = $slug;
        }

        $post->update($data);

        return redirect()->route('posts.dashboard')->with('success', 'Articolo aggiornato!');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();

        return redirect()->route('posts.dashboard')->with('success', 'Articolo eliminato!');
    }
}
