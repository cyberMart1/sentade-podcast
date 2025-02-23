@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="hero-wrap js-fullheight" style="margin-top: -25px; background-image: url('{{ asset('assets/images/modern-microphone.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Welcome to Purposeful Living</h2>
          	<h1 class="mb-4"> <i class="fa fa-music"></i> Bringing the word of God to your Ears!</h1>
            <p><a href="{{ route('about') }}" controls="controls" class="btn btn-primary">Learn more</a> <a href="{{ route('contact') }}" class="btn btn-white">Contact us</a></p>
          </div>
        </div>
      </div>
    </div>

  
    <section class="ftco-section ftco-services" id="podcast">
    	<div class="container">
    		<div class="row">
				@foreach ($podcasts as $podcast)
					<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
						<div class="d-block services-wrap text-center">
						<div class="img" style="background-image: url({{asset('assets/images/'.$podcast->image.'') }})"></div>
						<div class="media-body py-4 px-3">
							<h3 class="heading">{{ $podcast->name }}</h3>
							<p>{{ $podcast->description }}</p>
							
							<p><a class="btn btn-primary album-poster" href="{{ asset('assets/audio/'.$podcast->audio.'') }}" target="_blank">Listen Now</a></p>
							{{-- <p><a href="javascript:void();" class="btn btn-primary album-poster" data-switch>Listen Now</a></p>
							 <a href="{{ asset('assets/audio/'.$podcast->audio.'') }}" target="_blank">Download Now</a> --}}
						</div>
						</div>      
					</div>
				@endforeach
				
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light" id="events">
		<div class="container-fluid px-md-0">
			<div class="row no-gutters justify-content-center pb-5 mb-3">
          		<div class="col-md-7 heading-section text-center ftco-animate">
            		<h2>EVENTS</h2>
          		</div>
            </div>			
			<div class="row no-gutters">
				@foreach ($events as $event)
					<div class="col-lg-6">
						<div class="room-wrap d-md-flex">
							<a href="{{ route('envdetails.events', $event) }}" class="img" style="background-image: url({{ asset('assets/images/'.$event->image.'') }});"></a>
							<div class="half left-arrow d-flex align-items-center">
								<div class="text p-4 p-xl-5 text-center">
									<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
									<!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
									<h3 class="mb-3"><a href="{{ route('envdetails.events', $event) }}">{{ $event->name }}</a></h3>
									<ul class="list-accomodation">
										<li><span>Date:</span> {{ $event->date }}</li>
										<li><span>Time:</span> {{ $event->time }}</li>
										<li><span>Location:</span>{{ $event->location }}</li>
										<li><span>Contact:</span> {{ $event->contact }}</li>
										<li><span>Host:</span>{{ $event->host }}</li>
									</ul>
									<p class="pt-1"><a href="{{ route('envdetails.events', $event) }}" class="btn-custom px-3 py-2">View Event Details <span class="icon-long-arrow-right"></span></a></p>
								</div>
							</div>
						</div>
					</div>  
				@endforeach    			  			

    		</div>
		</div>
	</section>



    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-8 wrap-about ">
						<div class="img img-2 mb-4" style="background-image: url({{ asset('assets/images/black_Mic.jpg') }});">
						</div>
						<h2>You are Welcome to a Life of Purpose</h2>
						<p>In every creature iis a distinctive trait that is great enough to affect generations positively. How do we discover it?</p>
						<p>Purposeful Living is a timely channel that opens up misery and secrets locked in the Bible as well as channel that stands as a guide to life with God as our anchor.</p>
					</div>
				
				</div>
			</div>
		</section>
		
		<section class="ftco-intro" style="background-image: url('{{ asset('assets/images/precher.jpg') }}');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Ready to get started</h2>
						<p class="mb-4">In every creature iis a distinctive trait that is great enough to affect generations positively. How do we discover it?</p>
						<p class="mb-0"><a href="{{ route('about') }}" class="btn btn-primary px-4 py-3">Learn More</a> <a href="{{ route('contact') }}" class="btn btn-white px-4 py-3">Contact us</a></p>
					</div>
				</div>
			</div>
		</section>

        
<div id="aplayer"></div>


 <script>
  $(".album-poster").on('click', function(e){
		var dataSwitch = $(this).attr('data-switch');
		//console.log(dataSwitch);

		//aplayer switch function
		ap.list.switch(dataSwitch);

		//aplayer function
		ap.play();
		$("#aplayer").addClass('showPlayer');
	});
	const ap = new APlayer({
		container: document.getElementById('aplayer'),
		listFolded: true,
		audio: [
            @foreach ($podcasts as $podcast)
                {
                name: 'Pastor Sentade',
                artist: '{{ $podcast->name }}',
                url: '{{ asset('assets/audio/'.$podcast->audio.'') }}',
                cover: '{{ asset('assets/images/disk.png') }}'
                },
            @endforeach
			]
	});
</script> 


@endsection

