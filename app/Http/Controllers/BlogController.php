<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('blogs', compact('blogs'));
    }

    public function approve($id){
        $blog = Blog::where('id', $id)->first();
        $blog->status = 1;
        if($blog->save()){
            return back()->with('success', 'Blog Approved Successfully');
        }
    }

    public function reject($id){
        $blog = Blog::where('id', $id)->first();
        $blog->status = 0;
        if($blog->save()){
            return back()->with('error', 'Blog Rejected Successfully');
        }
    }
}
