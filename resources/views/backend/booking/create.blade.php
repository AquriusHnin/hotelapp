@extends('layouts.app')

@section('main-content')
	 <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Create A Booking
        <!-- form start -->
        <form role="form" action="{{ route('backend.booking.store') }}" method="post">
            <div class="box-body">
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
                        <label for="start_month">CheckIn/CheckOut</label>
                        @endif
                        
                        <div class="input-daterange input-group" id="datepicker">
                        	
                        	<span class="input-group-addon">CheckIn</span>
                        	<input type="text" class="input-sm form-control" id="checkin" name="checkin">
                        	<span class="input-group-addon">CheckOut</span>
                        	<input type="text" class="input-sm form-control" id="checkout" name="checkout">
                        	</div>
                     </div>
                   
                    
               

                 


                   {{--  </div>/.box-body --}}

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <button type="reset" class="btn btn-default">Create</button>
                        
                    </div>
            </div>
        </form>
    </div>
@endsection

@section("js")
<script>
"use strict";

let nowDate = new Date();
let today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);

let endday = new Date(nowDate.getFullYear(), nowDate.getMonth()+2, nowDate.getDate(), 0, 0, 0, 0);



let registerpost_url="{{ url('backend/booking/getBookingDate') }}";
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