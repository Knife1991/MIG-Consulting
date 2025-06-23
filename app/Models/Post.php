<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Feed\FeedItem;
use Spatie\Feed\Feedable;

class Post extends Model implements Feedable
{
    protected $fillable = ['title', 'body', 'slug', 'image_url', 'user_id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->title) . '-' . uniqid();
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create([
            'id' => $this->id,
            'title' => $this->title,
            'summary' => Str::limit(strip_tags($this->body), 150),
            'updated' => $this->updated_at,
            'link' => route('blog.show', $this->slug),
            'author' => $this->author->name ?? 'Admin',
        ]);
    }

    public static function getFeedItems()
    {
        return static::latest()->take(20)->get();
    }
}
