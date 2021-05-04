<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('home/index', [
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts/post', [
            'post' => $post
        ]);
    }
}
