<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Announcement;

class HomeController extends Controller
{


    public function index()
    {
        $announcements = Announcement::whereHas('car')->latest()->take(4)->get();
        $blogs = Blog::latest()->take(4)->get();
        return view('welcome', compact('announcements','blogs'));
    }



}
