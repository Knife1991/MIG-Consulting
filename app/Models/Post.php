<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'slug', 'image_url' , 'user_id'];
    
    // Crea automaticamente lo slug dal titolo
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
}

