<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Show the list of blog posts.
     */
    public function index()
    {
        $posts = [
            ['title' => 'Fieldwork', 'slug' => 'fieldwork'],
            ['title' => 'First Feedback', 'slug' => 'firstfeedback'],
            ['title' => 'Programming', 'slug' => 'programming'],
            ['title' => 'Study Choice', 'slug' => 'studychoice'],
            ['title' => 'SWOT Analysis', 'slug' => 'swot'],
        ];

        return view('blog', compact('posts'));
    }

    /**
     * Show a specific blog post.
     */
    public function show(string $slug)
    {
        $viewPath = 'blogposts.' . Str::slug($slug);

        if (!view()->exists($viewPath)) {
            abort(404, 'Post not found');
        }

        return view($viewPath);
    }
}
