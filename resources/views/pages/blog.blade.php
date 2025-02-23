@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="margin-top:-25px; background-image: url('{{ asset('assets/images/podcas_mic.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Blog </h1>
          </div>
        </div>
      </div>
</section>

<section class="ftco-section bg-light" id="events">
		<div class="container-fluid px-md-0">
			<div class="row no-gutters justify-content-center pb-5 mb-3">
          		<div class="col-md-7 heading-section text-center ftco-animate">
            		<h2>BLOGS</h2>
          		</div>
            </div>			
			<div class="row no-gutters">
				@foreach ($blogs as $blog)
					<div class="col-lg-6">
						<div class="room-wrap d-md-flex">
							<a href="{{ route('pages.blogdetails', $blog) }}" class="img" style="background-image: url({{ asset('assets/images/'.$blog->image.'') }});"></a>
							<div class="half left-arrow d-flex align-items-center">
								<div class="text p-4 p-xl-5 text-center">
									
									<!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
									<h3 class="mb-3">{{ $blog->title }}</h3>
									<ul class="list-accomodation">
                                        <li>{{ $blog->description }}</li>
										<li><span>Date:</span> {{ $blog->date }}</li>
									</ul>
									<p class="pt-1"><a href="{{ route('pages.blogdetails', $blog) }}" class="btn-custom px-3 py-2">View More <span class="icon-long-arrow-right"></span></a></p>
								</div>
							</div>
						</div>
					</div>  
				@endforeach   
                
              {{--  <div class="col-lg-6">
						<div class="room-wrap d-md-flex">
							<a href="" class="img" style="background-image: url({{ asset('assets/images/hopesAndDream.jpg') }});"></a>
							<div class="half left-arrow d-flex align-items-center">
								<div class="text p-4 p-xl-5 text-center">
									<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
									<!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
									<h3 class="mb-3"><a href="">{{ $blog->title }}</a></h3>
									<ul class="list-accomodation">                                        
										<li>{{ $blog->description }}</li>
										<li><span>Date:</span> {{ $blog->date }}</li>
									</ul>
									<p class="pt-1"><a href="{{ route('envdetails.events', $event) }}" class="btn-custom px-3 py-2">View Event Details <span class="icon-long-arrow-right"></span></a></p>
								</div>
							</div>
						</div>
					</div>  --}}  

    		</div>
		</div>
</section>


@endsection