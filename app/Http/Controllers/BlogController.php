<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = \App\Models\Blog::all();
        $blog_categories=Blog::select('category')->distinct()->get();
        $recent_blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();

        return view('blog', compact('blogs','blog_categories','recent_blogs'));
    }
    public function show($slug)
    {
      $blog = \App\Models\Blog::where('slug', $slug)->firstOrFail();


        return view('blog_details', compact('blog'));
    }
}
