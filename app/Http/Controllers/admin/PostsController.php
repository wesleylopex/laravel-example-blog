<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
            'content' => 'required',
            'image' => 'required'
        ]);

        $post = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'images' => $request->input('image')
        ];

        echo json_encode($post);
    }
}
