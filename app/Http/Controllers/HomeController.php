<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Blog;

use App\Models\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{


        public function index()
        {
            $cars = Car::whereHas('announcement')->latest()->take(4)->get();
            $blogs = Blog::latest()->take(4)->get();
            return view('welcome', compact('cars','blogs'));
        }
        


}
