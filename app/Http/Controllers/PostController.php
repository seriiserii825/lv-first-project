<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id) {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }
}
