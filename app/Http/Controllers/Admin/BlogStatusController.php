<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogStatusController extends Controller
{


    public function index()
    {
        $blogs = Blog::All();
        return view('admin.blogs.blog', compact('blogs'));
    }

    public function edit(Request $request,$id)
    {

        // $blogs = Blog::where('blogStatus', 'pending')->get();
        // $statuses = ['rejected','accepted','pending'];
        $blog = Blog::findOrFail($id);
        // $statuses = ['rejected','accepted','pending'];

        return view('admin.blogs.acceptblog', compact('blog'));

    }
    public function blogStatus(Request $request,Blog $blog)
    {
        $data = $request->validate([
            'blogStatus' => 'required|in:rejected,accepted,pending',
        ]);
        $blog->update($data);
        // dd($blog->all());


        return view('admin.blogs.acceptblog',compact('blog'));
    }
}
