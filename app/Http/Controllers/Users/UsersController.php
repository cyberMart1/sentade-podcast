<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Booking\Booking;
use Auth;
use Event;

class UsersController extends Controller
{
    //

    public function myEvents(){

        $bookings = Booking::select()->orderBy('id', 'desc')->where('user_id', Auth::user()->id)->get();

         return view('users.myevents', compact('bookings'));
    }
}
