<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        // Here you would typically fetch blog posts from the database
        // For demonstration purposes, we'll just return a view

        return view('blog');
    }
    public function show($slug)
    {
        // Here you would typically fetch the blog post from the database using the slug
        // For demonstration purposes, we'll just return a view with the slug

        return view('blog_details', ['slug' => $slug]);
    }
}
