<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {
        return view('blog', [
            'posts' => Post::all()
        ]);
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'column1' => 'required',
            'column2' => 'required',
            'column3' => 'required',
        ]);

        $posts = Post::create($validated);


        return redirect()->route('blog');
    }





    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
