<?php

namespace App\Actions\Post;

use App\Models\Post;

class StoreAction
{
    public static function execute($request)
    {
        $input = $request->only([
            'title',
            'description',
            'author',
        ]);
        $resource = Post::create($input);

        return $resource;
    }
}