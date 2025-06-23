<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Feed\FeedItem;
use Spatie\Feed\Feedable;

class Post extends Model implements Feedable
{
    protected $fillable = ['title', 'body', 'slug', 'image_url', 'user_id'];

    // Genera automaticamente lo slug al momento della creazione
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->title) . '-' . uniqid();
        });
    }

    // Relazione con l'autore
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Restituisce gli ultimi 20 post per il feed
    public static function getFeedItems()
    {
        return self::latest()->take(20)->get();
    }

    // Converte un post in un feed item compatibile con Spatie e MailerLite
    public function toFeedItem(): FeedItem
    {
        return FeedItem::create([
            'id'          => route('blog.show', ['slug' => $this->slug]),  // GUID completo
            'title'       => $this->title,
            'summary'     => Str::limit(strip_tags($this->body), 200),     // Riassunto testuale
            'updated'     => $this->updated_at,
            'link'        => route('blog.show', ['slug' => $this->slug]),
            'authorName'  => $this->author ? $this->author->name : 'MIG Consulting',
            'enclosure'   => asset($this->image_url), // URL assoluto dell’immagine
        ]);
    }
}
