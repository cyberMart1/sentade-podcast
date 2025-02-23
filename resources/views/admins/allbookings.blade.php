@extends('layouts.admin')

@section('content')



<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
                <div class="container">
                    
                    @if (session()->has('update'))
                      <div class="alert alert-success">
                          {{ session()->get('update') }}
                      </div>            
                    @endif
                  </div>

                  <div class="container">
                    
                    @if (session()->has('delete'))
                      <div class="alert alert-success">
                          {{ session()->get('delete') }}
                      </div>            
                    @endif
                  </div>
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone no</th>
                    <th scope="col">Event name</th>
                    <th scope="col">Event Location</th>
                    <th scope="col">status</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">change Status</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                        <th scope="row">{{ $booking->id }}</th>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->phone_number }}</td>
                        <td>{{ $booking->event_name }}</td>
                        <td>{{ $booking->event_location }}</td>
                        <td>{{ $booking->status }}</td>
                        <td>{{ $booking->created_at }}</td>
                        <td><a href="{{ route('bookings.edit.status', $booking->id) }}" class="btn btn-warning  text-center text-white">change Status</a></td>
                        
                        <td><a href="{{ route('bookings.delete', $booking->id) }}" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                    @endforeach

                  
                  
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>


@endsection