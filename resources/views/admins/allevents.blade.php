@extends('layouts.admin')

@section('content')


<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">

              <div class="container">
                
                @if (session()->has('success'))
                  <div class="alert alert-success">
                      {{ session()->get('success') }}
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


              <h5 class="card-title mb-4 d-inline">Events</h5>
             <a  href="{{ route('events.create') }}" class="btn btn-primary mb-4 text-center float-right">Create Events</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">image</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Location</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Host</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                        <th scope="row">{{ $event->id }}</th>
                        <td>{{ $event->name }}</td>
                        <td><img width="60" height="60" src="{{ asset('assets/images/'.$event->image.'') }}" alt="" ></td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->time }}</td>
                        <td>{{ $event->location }}</td>
                        <td>{{ $event->contact }}</td>
                        <td>{{ $event->host }}</td>

                        <td><a href="{{ route('events.delete', $event->id) }}" class="btn btn-danger  text-center ">Delete</a></td>
                    </tr>
                    @endforeach
               
                  
                </tbody>
              </table> 
            </div>
          </div>
        </div>
</div>

@endsection