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

                                                <th rowspan="1" colspan="1">Status</th>
                                            
                                                <th rowspan="1" colspan="1">Check_in</th>

                                                <th rowspan="1" colspan="1">Check_out</th>

                                                <th rowspan="1" colspan="1">Action</th>

                                            </tr>
                                        </thead>

                                       
                                        
                                        <tbody>
                                             @foreach($bookings as $booking)

                                             		<td>{{  $booking->id }}</td>
                                                    

                                                    <td>{{  $booking->user->name }}</td>

                                                    <td>{{  $booking->roomtype_id }}</td>

                                                    <td>{{  $booking->status }}</td>

                                                    <td>{{  $booking->check_in }}</td>

                                                    <td>{{  $booking->check_out }}</td>


                                                    <td>    <form action="{{ route('backend.booking.destroy',['id'=>$booking->id]) }}" method="POST">  
                                                    
                                                        <button class="btn btn-danger">
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


@endsection