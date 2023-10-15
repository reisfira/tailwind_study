<?php

namespace App\Actions\Post;

use App\Models\Post;

class UpdateAction
{
    public static function execute($request, $id)
    {
        $input = $request->only([
            'title',
            'description',
            'author',
        ]);

        $resource = Post::findOrFail($id);
        $resource->update($input);

        return $resource;
    }
}