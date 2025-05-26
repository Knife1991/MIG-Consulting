<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    /**
     * Determine whether the user can view any posts.
     */
    public function viewAny(User $user): bool
    {
        // Per esempio, tutti gli utenti autenticati possono vedere la lista
        return true;
    }
    
    /**
     * Determine whether the user can view the post.
     */
    public function view(User $user, Post $post): bool
    {
        // Permetti di vedere il post se è pubblico o se è il proprietario
        return true; // o metti una logica più complessa
    }
    
    /**
     * Determine whether the user can create posts.
     */
    public function create(User $user): bool
    {
        // Per esempio, tutti gli utenti autenticati possono creare
        return true;
    }
    
    /**
     * Determine whether the user can update the post.
     */
    public function update(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }
    
    /**
     * Determine whether the user can delete the post.
     */
    public function delete(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }
    
    /**
     * Determine whether the user can restore the post.
     */
    public function restore(User $user, Post $post): bool
    {
        return false;
    }
    
    /**
     * Determine whether the user can permanently delete the post.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        return false;
    }
}
