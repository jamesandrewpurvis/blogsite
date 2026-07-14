<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->take(6)->get();
        $featured = Post::where('post_featured', true)->first();
        return view('blog', [
            'posts' => $posts,
            'featured' => $featured,
        ]);

    }

    public function show($slug) {
        $post = Post::where('post_slug', $slug)->firstOrFail();
        return view('show', compact('post'));
    }
}
