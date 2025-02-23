<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Events\Events;
use Auth;
use Illuminate\Http\Request;
use App\Models\Booking\Booking;
use Redirect;


class EventController extends Controller
{
    //

    public function events($id){
        
        $getEvent = Events::find($id); 

        return view('envdetails.events', compact('getEvent'));
    }



    public function eventsBooking(Request $request, $id){
        
        $event = Events::find($id);
        $bookEvents = Booking::create([

            "name" => $request->name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "user_id" => Auth::user()->id,
            "event_name" => $event->name,
            "event_location" => $event->location,

            
       ]);

    //    return Redirect::route('envdetails.sucess', compact('bookEvents'));

      echo "You've Booked successfully"; 
    }

    public function success(){
        return view('envdetails.success');
    }
}

