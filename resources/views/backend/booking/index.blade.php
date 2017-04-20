@extends('layouts.app')

@section('main-content')


<div class="row">
    <div class="col-xs-12">
        <div class="box box-default">

            <!-- /.box-header -->
            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
                    <div class="row">
                     <div class="col-sm-12">

                       <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">

                             <th rowspan="1" colspan="1">Booking No</th>

                             <th rowspan="1" colspan="1">UserName</th>

                             <th rowspan="1" colspan="1">RoomType</th>

                             <th rowspan="1" colspan="1">Room No</th>

                             <th rowspan="1" colspan="1">Status</th>

                             <th rowspan="1" colspan="1">Check_in</th>

                             <th rowspan="1" colspan="1">Check_out</th>


                             <th rowspan="1" colspan="1">Action</th>

                         </tr>
                     </thead>



                     <tbody>
                         @foreach($bookings as $booking)

                         <td>{{  $booking->id }}</td>

                         @if(!empty($booking->user->name))
                         <td>{{  $booking->user->name }}</td>
                         @endif

                         <td>{{  $booking->roomtype_id }}</td>

                         @if(!empty($booking->room))
                         <td>{{  $booking->room->room_no }}</td>
                         @endif


                         <td>
                            @if($booking->status==1)
                            <a href="" class="btn btn-success checkout form-control" data-id={{ $booking->id }} data-target="#myModal" data-toggle="modal">Check Out</a>
                            @else 
                            <a href="" class="btn btn-info form-control" data-toggle="modal">Check In</a>
                            @endif


                        </td>

                        <td>{{  $booking->check_in }}</td>

                        <td>{{  $booking->check_out }}</td>


                        <td>    




                        </br>

                        <form action="{{ route('backend.booking.destroy',['id'=>$booking->id]) }}" method="POST">  

                            <button class="form-control btn btn-danger">
                                <i class="fa fa-btn fa-trash"></i>Delete
                            </button>

                            {{ csrf_field() }}

                            {{ method_field('DELETE') }}
                        </form>   

                    </td> 


                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>



</div>
</div>

<div class="row">
    <div class="col-sm-5">
        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
            {!! $bookings->render() !!}
        </div>
    </div>
</div>

<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Invoice</h4>
      </div>

      <div class="modal-body">
          <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>Roomfees</td>
                    <td id="room_fees"></td>
                </tr>
                <tr>
                    <td>BarServices</td>
                    <td>

                        <select multiple id="services_data">
                            
                        </select>

                        <button id="services">Click</button>
                    </td>
                </tr>
                <tr id="hi">
                   
                </tr>
                <tr>
                    <td>Total</td>
                    <td id="total"></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Close</button>
  </div>

</div>

</div>
</div>

@endsection

@section("js")
<script>
    "use strict";
    let invoicepost_url="{{ url('backend/booking/getAjax') }}";
    let services={"Drinks":200,"Snack":300,"Wine":600,"CockTail":700,"BeefSteak":100};
    let barservice_price=0;
    let room_price=0
    $("#services").on("click",function(e){
        let data=$("#services_data").val();

        console.log(data);
        $.each(data,function(key,value){
            value=parseInt(value);
            barservice_price=barservice_price+value;
            
        });       

        $("#total").html(barservice_price+parseInt(room_price));


    });

    $("#close").on("click",function(e){
        location.reload();
    });

    $(".checkout").on("click",function(e){
        let Id = $(this).data('id');

        

        $.each( services, function( key, value ) {
            $("#services_data").append( "<option value='"+value+"'>"+key+"</option>" );
        });

         $.ajax({
                url:invoicepost_url,
                type:"POST",
                headers:{'X-CSRF-Token':$('input[name=_token]').val()},
                data: {id:Id},
                cache: false,       // To unable request pages to be cached
                success:function(room_fees)
                {
                    room_price=room_fees;
                    $("#room_fees").html(room_fees);

                }
            });



     });
    

        </script>
        @endsection