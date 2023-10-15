<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Actions\Post\IndexAction;
use App\Actions\Post\StoreAction;
use App\Actions\Post\UpdateAction;
use App\Actions\Post\DestroyAction;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('modules.posts.index', IndexAction::execute());
    }

    public function create()
    {
        return view('modules.posts.create');
    }

    public function store(Request $request)
    {
        $resource = StoreAction::execute($request);

        session()->flash('message', "Post {$resource->title} created successfully");
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        $data = [];
        $data['resource'] = $post;

        return view('modules.posts.show', $data);
    }

    public function edit(Post $post)
    {
        $data = [];
        $data['resource'] = $post;

        return view('modules.posts.edit', $data);
    }

    public function update(Request $request, Post $post)
    {
        $resource = UpdateAction::execute($request, $post->id);

        session()->flash('message', "Post {$resource->title} updated successfully");
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $resource = DestroyAction::execute($post->id);

        session()->flash('message', "Post {$resource->title} deleted successfully");
        return redirect()->route('posts.index');
    }
}
