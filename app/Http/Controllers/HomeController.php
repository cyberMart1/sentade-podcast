<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Podcast\Podcast;
use App\Models\Events\Events;
use App\Models\Blog\Blogs;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $podcasts = Podcast::select()->orderBy('id', 'desc')->take(6)->get();

        $events = Events::select()->orderBy('id', 'desc')->take(4)->get();

        return view('home', compact('podcasts', 'events'));
    }

    public function about()
    {

        return view('pages.about');
    }

    public function contact()
    {

        return view('pages.contact');
    }

    public function blog()
    {

        $blogs = Blogs::select()->orderBy('id', 'asc')->take(3)->get();
        return view('pages.blog', compact('blogs'));
    }
}
