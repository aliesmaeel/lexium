<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Email;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $blogs=Blog::all();

        return view('home', compact('blogs'));
    }

    public function submit(Request $request)
    {


        $request->validate([
            'phone' => 'required|string',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $emails=Email::create([
            'name' => $request->name ?? 'Guest',
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->country_code.$request->phone ?? null,
        ]);
        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
