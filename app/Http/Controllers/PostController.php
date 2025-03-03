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
            ['title' => 'Fieldwork', 'slug' => 'fieldwork', 'description' => "description"],
            ['title' => 'First Feedback', 'slug' => 'firstfeedback', 'description' => "After two weeks of working on my website I had to pitch it to my teachers and fellow student. In this blog i'll show what feedback i got on my website."],
            ['title' => 'Programming', 'slug' => 'programming', 'description' => "In this blog i'll talk about what (very little) experience I had in programming before I started this study."],
            ['title' => 'Study Choice', 'slug' => 'studychoice', 'description' => "In this blog i'll explain why I think ICT fits me."],
            ['title' => 'SWOT Analysis', 'slug' => 'swot', 'description' => "description"],
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
