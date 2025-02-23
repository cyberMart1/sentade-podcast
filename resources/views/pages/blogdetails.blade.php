@extends('layouts.app')

@section('content')

{{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/podcas_mic.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section> --}}
   
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-8">
    				<div>
    					<img src="{{ asset('assets/images/'.$getBlog->image.'') }}" width="70%" height="60%" />
    				</div>
    			</div>
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-lg-8 col-md-7 d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<div>
											<p>{{ $getBlog->blog_display }}</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>


@endsection