<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('admin.blogs.index', compact('blog'));
    }

    public function add()
    {
        return view('admin.blogs.add');
    }
    
    public function insert(Request $request)
    {
       $blog = new Blog();
       if($request->hasFile('image'))
       {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move(public_path('assets/uploads/blog'), $filename);
        $blog->image = $filename;
       }
       $blog->title = $request->input('title');
       $blog->small_description = $request->input('small_description');
       $blog->content = $request->input('content');
       $blog->slug = $request->input('slug');
       $blog->status = $request->input('status') == TRUE ? '1' : '0';
       $blog->save();

       return redirect('admin/blogs')->with('status', "Blog added successfully");
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        if ($request->hasFile('image'))
        {
            $path = 'assets/uploads/blog/'.$blog->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('assets/uploads/blog'), $filename);
            $blog->image = $filename;
        }

        $blog->title = $request->input('title');
        $blog->small_description = $request->input('small_description');
        $blog->content = $request->input('content');
        $blog->slug = $request->input('slug');
        $blog->status = $request->input('status') == TRUE ? '1' : '0';
        $blog->update();
        return redirect('admin/blogs')->with('status', "Blog updated successfully");
        }

}
