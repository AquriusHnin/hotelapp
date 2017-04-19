@extends('frontend.layout.master')

@section('main-content')


<div class="container">

<h2>Bar Services</h2>

<div class="row">

       @foreach($barservices as $barservice)

       
              <div class="col-sm-4 wowload fadeInUp">
                     <div class="rooms"><img src="{{ asset('img/food/'.$barservice->image) }}" class="img-responsive">
                            <div class="info"><h3>{{  $barservice->name }}&nbsp&nbsp ${{  $barservice->price }}</h3>
                            </div>
                     </div>
              </div>


       @endforeach

</div>

 
@endsection
