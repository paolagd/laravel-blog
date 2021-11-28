<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{
    public static function find($slug)
    {

        if (!file_exists($path =  resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }
        // Get the content of the file, cache it and return it
        return cache()->remember("posts.{$slug}", 1000, fn () => file_get_contents($path));
    }
}
