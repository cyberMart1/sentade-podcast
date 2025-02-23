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

              <h5 class="card-title mb-4 d-inline">Blogs</h5>
             <a  href="{{ route('blogs.create') }}" class="btn btn-primary mb-4 text-center float-right">Create Blogs</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">image</th>
                    <th scope="col">Description</th>
                    <th scope="col">ID</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                        <th scope="row">{{ $blog->id }}</th>
                        <td>{{ $blog->title }}</td>
                        <td><img width="60" height="60" src="{{ asset('assets/images/'.$blog->image.'') }}" alt="" ></td>
                        <td>{{ $blog->description }}</td>
                        <td>{{ $blog->blog_id }}</td>
                        <td>{{ $blog->date }}</td>

                        <td><a href="{{ route('blogs.delete', $blog->id) }}" class="btn btn-danger  text-center ">Delete</a></td>
                    </tr>
                    @endforeach
               
                  
                </tbody>
              </table> 
            </div>
          </div>
        </div>
</div>

@endsection