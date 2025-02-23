@extends('layouts.app')

@section('content')

<div class="hero-wrap js-fullheight" style="margin-top:-25px; background-image: url({{ asset('assets/images/envt-img.jpg') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">You booked This Event Successfully</h2>
          	<h1 class="mb-4"></h1>
              <a href="{{ route('home') }}"><input type="button" value="Go Home" class="btn btn-primary py-3 px-4"></a>
          </div>
        </div>
      </div>
    </div>
		
@endsection