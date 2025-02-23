@extends('layouts.app')

@section('content')

<div class="hero-wrap js-fullheight" style="margin-top:-25px; background-image: url({{ asset('assets/images/envt-img.jpg') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h1 class="subheading">My Events</h1>
          	<h1 class="mb-4"></h1>
              <!-- <a href="{{ route('home') }}"><input type="button" value="Go Home" class="btn btn-primary py-3 px-4"></a> -->
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="margin-top:20px;">  

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Event Name</th>
                <th scope="col">Event Location</th>
                <th scope="col">status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone_number }}</td>
                    <td>{{ $booking->event_name }}</td>
                    <td>{{ $booking->event_location }}</td>
                    <td>{{ $booking->status }}</td>
                    </tr>
                @endforeach
                
                
            </tbody>
        </table>
    </div>
		
@endsection