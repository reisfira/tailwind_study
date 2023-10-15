<?php

namespace App\Actions\Post;

use App\Models\Post;

class IndexAction
{
    public static function execute()
    {
        $resources = Post::get();

        $data = [
            'resources' => $resources
        ];

        return $data;
    }
}