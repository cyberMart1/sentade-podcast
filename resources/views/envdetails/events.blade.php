@extends('layouts.app')

@section('content')

<div class="hero-wrap js-fullheight" style="margin-top:-25px; background-image: url({{ asset('assets/images/'.$getEvent->image.'') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Welcome to Purposeful Living</h2>
          	<h1 class="mb-4">{{$getEvent->name}}</h1>
            <!-- <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p> -->
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    	<div class="container">
	    	<div class="row justify-content-end">
	    		<div class="col-lg-4">
					<form action="{{ route('envdetails.events.booking',$getEvent->id) }}" method="POST" class="appointment-form" style="margin-top: -568px;">
						@csrf
						<h3 class="mb-3">Book for this Event</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input name="email" type="text" class="form-control" placeholder="Email">
								</div>
							</div>
						   
							<div class="col-md-12">
								<div class="form-group">
									<input name="name" type="text" class="form-control" placeholder="Full Name">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<input name="phone_number" type="text" class="form-control" placeholder="Phone Number">
								</div>
							</div>
						
							<div class="col-md-12">
								<div class="form-group">
									@if (isset(Auth::user()->id))
										<input type="submit" value="Book Now" class="btn btn-primary py-3 px-4">
									@else
										<p class="alert alert-success">Login to book for this Event</p>

									@endif
									
									
								</div>
							</div>
							
						</div>
				</form>
	    		</div>
	    	</div>
	    </div>
    </section>
   

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-9 wrap-about">
						<div class="img img-2 mb-4" style="background-image: url({{ asset('assets/images/black_Mic.jpg') }});">
						</div>
						<h2>You are Welcome to a Life of Purpose</h2>
						<p>In every creature iis a distinctive trait that is great enough to affect generations positively. How do we discover it?</p>
						<p>Purposeful Living is a timely channel that opens up misery and secrets locked in the Bible as well as channel that stands as a guide to life with God as our anchor.</p>
					</div>
					
				</div>
			</div>
		</section>
		
@endsection