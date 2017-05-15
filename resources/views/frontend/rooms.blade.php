@extends('frontend.layout.master')

@section('main-content')


<div class="container">

<h2>Rooms & Details</h2>

<div class="row">

	@foreach($roomtypes as $roomtype)

	
		<div class="col-sm-6 wowload fadeInUp">
			<div class="rooms"><img src="{{ asset('img/frontendrooms/'.$roomtype->image) }}" class="img-responsive">
				<div class="info"><h3>{{  $roomtype->name }}&nbsp&nbsp ${{  $roomtype->price }}</h3><p> {{  $roomtype->features }}</p>
				<i class="fa fa-phone" aria-hidden="true" style="font-size:25px;color:#585650;"></i> &nbsp&nbsp&nbsp
				<i class="fa fa-wifi" aria-hidden="true" style="font-size:25px;color:#585650;"></i> &nbsp&nbsp&nbsp
				<i class="fa fa-cutlery" aria-hidden="true" style="font-size:25px;color:#585650;"></i>
				</div>
			</div>
		</div>


	@endforeach

</div>

 
@endsection
