@extends('frontend.layout.master')

@section('main-content')

<div class="banner">    	   
    <img src=" {{ asset('img/images/photos/cover.jpg') }}" class="img-responsive" alt="slide"   >
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Savoy | Best hotel in Myanmar</h1>
                <p class="animated fadeInUp">Most luxurious hotel of Myanamar with the royal treatments and excellent customer service.</p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    <img src="{{ asset('img/images/photos/hh1.jpg') }}" class="img-responsive" >
</div>
<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form role="form" class="wowload fadeInRight">
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email">
        </div>       
        <div class="form-group">
            <div class="row">
            <div class="col-xs-12">
            <select class="form-control">
              <option>No. of Rooms</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>        
            </div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
              <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                <option>Stat Date</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-6">
              <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                <option>End Date</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            
          </div>
        </div>
        <button class="btn btn-default">Submit</button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="{{ asset ('img/images/photos/r1.jpg') }}" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="{{asset('img/images/photos/r2.jpg') }}"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="{{ asset('img/images/photos/r3.jpg') }}"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="{{ asset ('img/images/photos/h1.jpg') }}" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="{{asset('img/images/photos/h2.jpg') }}"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="{{ asset('img/images/photos/h3.jpg') }}"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Spa<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
             <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="{{ asset ('img/images/photos/f2.jpg') }}" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="{{ asset ('img/images/photos/7.jpg') }}"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="{{ asset ('img/images/photos/5.jpg') }}"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->



@endsection
