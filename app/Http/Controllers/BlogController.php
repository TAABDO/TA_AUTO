<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {

        $blogs = Blog::where('blogStatus', 'accepted')->get();

        return view('blogs', compact('blogs'));
    }

    public function index()
{
    $blogs = auth()->user()->blogs;
    return view('announcer.blogs.blog',compact('blogs'));
}

    public function create()
    {

        return view('announcer.blogs.create');

    }

    public function store(Request $request)
    {

        $blog = $request->validate([

            'title' => 'sometimes',
            'description' => 'sometimes',
            'user_id' => 'sometimes',
            'BlogImg' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $blogs = auth()->user()->blogs()->create($blog);

        if ($request->hasFile('BlogImg')) {
            $blogs->addMediaFromRequest('BlogImg')->toMediaCollection('Blog_Image');
        }
        if ($blogs) {
            return view('announcer.blogs.create')->with('the blog has created successfully');
        }
    }

    public function show($id)
    {
        
        $blog = Blog::findOrFail($id);
        return view('blog-details', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('announcer.blogs.update', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes',
            'description' => 'sometimes',
            'BlogImg' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $blog->update($validatedData);

        if ($request->hasFile('BlogImg')) {
            $blog->clearMediaCollection('Blog_Image');
            $blog->addMediaFromRequest('BlogImg')->toMediaCollection('Blog_Image');
        }

        return redirect()->route('Blog.Blog')->with('message', 'The blog has been updated successfully');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('Blog.Blog')->with('message', 'The blog has been deleted successfully');
    }
}
