<?php

namespace App\Http\Controllers\Admins;

use App\Models\Admin\Admin;
use App\Models\Blog\Blogs;
use App\Models\Booking\Booking;
use App\Models\Events\Events;
use App\Models\Podcast\Podcast;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Redirect;
use File;
use Illuminate\Http\Request;
class AdminsController extends Controller


{
    //

    public function viewLogin(){

        return view('admins.login');
    }

    public function checkLogin(Request $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            
            return redirect() -> route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);

    }

    public function index(){

        $adminsCount = Admin::select()->count();
        $podcastCount = Podcast::select()->count();
        $eventsCount = Events::select()->count();


        return view('admins.index', compact('adminsCount', 'podcastCount', 'eventsCount'));
    }


    public function allAdmins(){

        $admins = Admin::select()->orderBy('id', 'asc')->get();

        return view('admins.alladmins', compact('admins'));
    }

    public function createAdmins(){


        return view('admins.createadmins');
    }

    public function storeAdmins(Request $request){

        $storeAdmins = Admin::create([

            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        if ($storeAdmins){

            return Redirect::route('admins.all')->with(['success'=> 'Admin Created Successfully']);
        }
        return view('admins.createadmins');
    }


    public function allPodcast(){

        $podcasts = Podcast::select()->orderBy('id', 'asc')->get();

        return view('admins.allPodcasts', compact('podcasts'));
    }

    public function createPodcast(){


        return view('admins.createpodcasts');
    }
    

    public function storePodcast(Request $request){

        Request()->validate([
            "name" => "required|max:50",
            "image" => "required|max:888",
            "description" => "required",
            "audio" => "required",
        ]);

        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $destinationAudioPath = 'assets/audio/';
        $myaudio = $request->audio->getClientOriginalName();
        $request->audio->move(public_path($destinationAudioPath), $myaudio);

        $storePodcasts = Podcast::create([

            "name" => $request->name,
            "description" => $request->description,
            'image' => $myimage,
            'audio' => $myaudio,
        ]);

        if ($storePodcasts){

            return Redirect::route('podcasts.all')->with(['success'=> 'Podcasts Created Successfully']);
        }
    }
    
    public function editPodcast($id){

        $podcast = Podcast::find($id);


        return view('admins.editpodcasts', compact('podcast'));
    }


    public function updatePodcast(Request $request, $id){

        Request()->validate([
            "name" => "required|max:50",
            "description" => "required",
        ]);

        $podcast = Podcast::find($id);

        $podcast->update($request->all());


        if ($podcast){

            return Redirect::route('podcasts.all')->with(['update'=> 'Podcast Updated Successfully']);
        }
    }


    public function deletePodcast($id){

        $podcast = Podcast::find($id);

        if(File::exists(public_path('assets/images/' . $podcast->image))){
            File::delete(public_path('assets/images/' . $podcast->image));
        }else{
            //dd('File does not exists.');
        }

        $podcast->delete();

        if ($podcast){

            return Redirect::route('podcasts.all')->with(['success'=> 'Podcast Deleted Successfully']);
        }        
    }

    public function allEvents(){

        $events = Events::select()->orderBy('id', 'asc')->get();

        return view('admins.allevents', compact('events'));
    }


    public function allBlog(){

        $blogs = Blogs::select()->orderBy('id', 'desc')->get();

        return view('admins.allblogs', compact('blogs'));
    }
    

    public function createEvents(){

        $events = Events::all();

        return view('admins.createevents', compact('events'));
    }

    public function createBlog(){

        // $blogs = Blogs::select()->orderBy('id', 'asc')->get();

        return view('admins.createblogs');
    }

    public function storeEvents(Request $request){

        // Request()->validate([
        //     "name" => "required|max:50",
        //     "image" => "required|max:888",
        //     "description" => "required",
        //     "audio" => "required",
        // ]);

        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $storeEvents = Events::create([

            "name" => $request->name,            
            'image' => $myimage,
            "date" => $request->date,
            "time" => $request->time,
            "location" => $request->location,
            "contact" => $request->contact,
            "host" => $request->host,
            "event_id" => $request->event_id,
        ]);

        if ($storeEvents){

            return Redirect::route('events.all')->with(['success'=> 'Event Created Successfully']);
        }
    }
    
    public function storeBlog(Request $request){

        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $storeBlogs = Blogs::create([

            "title" => $request->title,
            "date" => $request->date,
            'image' => $myimage,
            "description" => $request->description,
            "blog_display" =>$request->blog_display,
            "blog_id" => $request->blog_id,
        ]);

        if ($storeBlogs){

            return Redirect::route('blogs.all')->with(['success'=> 'Blog Created Successfully']);
        }
    }

    public function deleteEvent($id){

        $events = Events::find($id);

        if(File::exists(public_path('assets/images/' . $events->image))){
            File::delete(public_path('assets/images/' . $events->image));
        }else{
            //dd('File does not exists.');
        }

        $events->delete();

        if ($events){

            return Redirect::route('events.all')->with(['delete'=> 'Event Deleted Successfully']);
        }        
    }

    public function deleteBlog($id){

        $blogs = Blogs::find($id);

        if(File::exists(public_path('assets/images/' . $blogs->image))){
            File::delete(public_path('assets/images/' . $blogs->image));
        }else{
            //dd('File does not exists.');
        }

        $blogs->delete();

        if ($blogs){

            return Redirect::route('blogs.all')->with(['delete'=> 'Blog Deleted Successfully']);
        }        
    }

    public function allBookings(){

        $bookings = Booking::select()->orderBy('id', 'asc')->get();

        return view('admins.allbookings', compact('bookings'));
    }

    public function editStatus($id){

        $booking = Booking::find($id);


        return view('admins.editstatus', compact('booking'));
    }

    public function updateStatus(Request $request, $id){

        // Request()->validate([
        //     "name" => "required|max:50",
        //     "description" => "required",
        // ]);

        $status = Booking::find($id);

        $status->update($request->all());


        if ($status){

            return Redirect::route('bookings.all')->with(['update'=> 'Status Updated Successfully']);
        }
    }

    public function deleteBookings($id){

        $booking = Booking::find($id);

        
        $booking->delete();

        if ($booking){

            return Redirect::route('bookings.all')->with(['delete'=> 'Booking Deleted Successfully']);
        }        
    }
    
    

}
