<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status','published')
            ->orderBy('published_at','desc')
            ->paginate(10);
        return view('blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status','published')->firstOrFail();
        return view('blogs.show', compact('blog'));
    }
}
