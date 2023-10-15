<?php

namespace App\Actions\Post;

use App\Models\Post;

class ShowAction
{
    public static function execute($id)
    {
        $resource = Post::findOrFail($id);

        return $resource;
    }
}