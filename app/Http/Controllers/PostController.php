<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $post->load('category');
        return view('post', compact('post'));
    }
}
