<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogStatusController extends Controller
{

    
    public function edit(Request $request,$id)
    {

        $blogs = Blog::where('blogStatus', 'pending')->get();
        $statuses = ['rejected','accepted','pending'];
        $blog = Blog::findOrFail($id);

        return view('admin.blogs.acceptblog', compact('blogs', 'statuses', 'blog'));

    }
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return redirect()->route('admin.blogs.acceptblog');
    }
}
