<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostDetailResource;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    function getPost()
    {
        $posts = Post::all();

        return PostResource::collection($posts);
    }

    function show($id) {
        // dd('hello');
        $post = Post::with('writer:id,email,username')->findOrFail($id);

        // return PostResource::collection($post);
        return new PostDetailResource($post);
    }
}
