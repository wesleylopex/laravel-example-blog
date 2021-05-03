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

    public function show($id)
    {
        return view('posts/post', [
            'post' => Post::findOrFail($id)
        ]);
    }
}
