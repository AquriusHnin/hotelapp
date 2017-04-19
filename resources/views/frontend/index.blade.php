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

                <div class="row">
                    <div class="col-sm-12">
                        @if (Session::has('create_message'))
                        <div class="alert alert-success alert-dismissible">
                            {{ Session::get('create_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        </div>
                        @endif
                    </div>
                </div>

                <form role="form" action="{{ route('frontend.customerbooking.store') }}" method="post" class="wowload fadeInRight">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   @if($errors->has('customer_name'))
                   <div class="form-group has-feedback has-error">
                    <label class="control-label" for="batch_name"><i class="fa fa-times-circle-o"></i> {{ $errors->first('customer_name') }}</label>
                    @else

                    <div class="form-group">
                      <label for="customer_name">Customer Name</label>
                      @endif
                      <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Enter Customer Name">
                  </div>

                  @if($errors->has('email'))
                  <div class="form-group has-feedback has-error">
                    <label class="control-label" for="customer_email"><i class="fa fa-times-circle-o"></i> {{ $errors->first('email') }}</label>
                    @else
                    <div class="form-group">
                        <label for="email">Customer Email</label>
                        @endif
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Customer Email">
                    </div>

                    @if($errors->has('roomtype_id'))
                    <div class="form-group has-feedback has-error">
                        <label class="control-label" for="customer_email"><i class="fa fa-times-circle-o"></i> {{ $errors->first('roomtype_id') }}</label>
                        @else
                        <div class="form-group">
                            <label for="select_roomtype">RoomType</label>
                            @endif
                            <select class="form-control" name="roomtype_id" id="select_roomtype">
                                <option value="" selected hidden>Please Select RoomType</option>
                                @foreach($roomtypes as $key=>$roomtype)
                                <option value="{{$key}}">{{$roomtype}}</option>
                                @endforeach
                            </select>
                        </div>

                        @if($errors->has('start_month'))
                        <div class="form-group has-feedback has-error">
                            <label class="control-label" for="start_month"><i class="fa fa-times-circle-o"></i> {{ $errors->first('start_month') }}</label>
                            @else
                            <div class="form-group" id="sandbox-container">

                                @endif

                                <div class="input-daterange input-group" id="datepicker">

                                    <span class="input-group-addon">CheckIn</span>
                                    <input type="text" class="input-sm form-control" id="checkin" name="checkin">
                                    <span class="input-group-addon">CheckOut</span>
                                    <input type="text" class="input-sm form-control" id="checkout" name="checkout">
                                </div>
                            </div>


                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Create</button>

                                <button type="reset" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
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

    @section("js")
    <script>
        "use strict";

        let nowDate = new Date();
        let today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);

        let endday = new Date(nowDate.getFullYear(), nowDate.getMonth()+2, nowDate.getDate(), 0, 0, 0, 0);



        let registerpost_url="{{ url('frontend/customerbooking/getBookingDate') }}";
        let booked_dates=[];

        $("#checkin").prop('disabled', true);
        $("#checkout").prop('disabled', true);




        $("#select_roomtype").on("change",function(e){


            $.ajax({
                url:registerpost_url,
                type:"POST",
                headers:{'X-CSRF-Token':$('input[name=_token]').val()},
                data: {roomtype:$(this).val()},
                cache: false,           // To unable request pages to be cached
                success:function(data)
                {

                    $("#checkin").prop('disabled', false);
                    $("#checkout").prop('disabled', false);   


                    
                    console.log(data);
                    

                    $('#sandbox-container .input-group').datepicker('remove');

                    $("#sandbox-container .input-group").datepicker({
                        format:"yyyy-mm-dd",
                        autoclose: true,
                        datesDisabled:data,
                        startDate: today,
                        endDate:endday,
                        maxViewMode: 1

                    });





                }
            });

        });











    </script>
    @endsection
