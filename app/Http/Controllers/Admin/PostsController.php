<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('admin/posts/index', [
            'posts' => Post::all()
        ]);
    }

    public function create()
    {
        return view('admin/posts/form');
    }

    public function update(Post $post)
    {
        return view('admin/posts/form', [
            'post' => $post
        ]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'id' => 'numeric|min:1',
            'title' => 'required|max:100',
            'content' => 'required'
        ]);

        $post = new Post();

        if (!empty($request->input('id'))) {
            $post->id = $request->input('id');
            $post->exists = true;
        }

        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $post->save();

        return redirect()->route('admin/posts');
    }
}
