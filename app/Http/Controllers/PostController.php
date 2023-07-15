<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function getPost()
    {
        $posts = Post::all();

        return response()->json($posts);
    }
}
