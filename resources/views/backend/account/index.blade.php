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

                                            	<th rowspan="1" colspan="1">No</th>
                                                
                                                <th rowspan="1" colspan="1">Type</th>
                                            
                                                <th rowspan="1" colspan="2">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($accounts as $account)

                                             		<td>{{  $account->id }}</td>
                                                    
                                                    <td>{{  $account->name }}</td>


                                                    <td>    <form action="{{ route('backend.account.destroy',['id'=>$account->id]) }}" method="POST">  
                                                    
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
                                    {!! $accounts->render() !!}
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