@extends('layouts.admin')

@section('content')



<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Blog</h5>
          <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                <!-- Email input -->
                 @csrf
                <div class="form-outline mb-4 mt-4">
                    <h2>
                        <input type="text" name="title" id="form2Example1" class="form-control" placeholder="Blog Title" />
                    </h2>
                </div>
                <div class="form-outline mb-4 mt-4">
                  <input type="file" name="image" id="form2Example1" class="form-control" />
                 
                </div>  
                <div class="form-outline mb-4 mt-4">
                    <textarea name="description" class="form-control" placeholder="Description" rows="3"></textarea>
                                   
                </div> 
                <div class="form-outline mb-4 mt-4">
                    <textarea name="blog_display" class="form-control" placeholder="Write your blog" rows="10"></textarea>
                                   
                </div> 

                 <div class="form-outline mb-4 mt-4">
                  <input type="date" name="date" id="form2Example1" class="form-control" placeholder="Time" />
                </div>
               
                <div class="form-outline mb-4 mt-4">
                <input type="number" name="blog_id" id="form2Example1" class="form-control" placeholder="Blog Id" />                    
                </div>

                
   

                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>

@endsection