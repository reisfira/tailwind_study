<?php

namespace App\Actions\Post;

use App\Models\Post;

class DestroyAction
{
    public static function execute($id)
    {
        $resource = Post::find($id);
        $resource->delete();
        
        return $resource;
    }
}