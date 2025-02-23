<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Blogs;
use Event;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blogs($id){
        
        $getBlog = Blogs::find($id);

        return view('pages.blogdetails', compact('getBlog'));
    }
}
