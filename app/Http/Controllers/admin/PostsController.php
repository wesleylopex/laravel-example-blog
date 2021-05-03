<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function form()
    {
        return view('admin/posts/form');
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required'
        ]);

        $post = [
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ];

        $created = Post::create($post);

        return redirect()->route('admin/posts');
    }
}
