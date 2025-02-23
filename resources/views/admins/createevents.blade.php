@extends('layouts.admin')

@section('content')



<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Events</h5>
          <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
                <!-- Email input -->
                 @csrf
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                 
                </div>
                <div class="form-outline mb-4 mt-4">
                  <input type="file" name="image" id="form2Example1" class="form-control" />
                 
                </div>  
                <div class="form-outline mb-4 mt-4">
                  <input type="date" name="date" id="form2Example1" class="form-control" placeholder="Date" />
                 
                </div> 
                 <div class="form-outline mb-4 mt-4">
                  <input type="time" name="time" id="form2Example1" class="form-control" placeholder="Time" />
                 
                </div> 
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="location" id="form2Example1" class="form-control" placeholder="Location" />
                 
                </div> 
                <div class="form-outline mb-4 mt-4">
                  <input type="tel" name="contact" id="form2Example1" class="form-control" placeholder="Contact" />
                 
                </div> 
               <div class="form-outline mb-4 mt-4">
                <input type="text" name="host" id="form2Example1" class="form-control" placeholder="Host" />
               
               </div> 
               
               <select name="event_id" class="form-control">
                <option>Choose Event Name</option>
                  @foreach ($events as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                  @endforeach
               </select>
               <br>
   

                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>

@endsection