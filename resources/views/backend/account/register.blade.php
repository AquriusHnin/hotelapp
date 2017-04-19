@extends('layouts.app')

@section('main-content')


    
    <div class="box box-default">
        
        <!-- form start -->
        <form role="form" action="{{ route('backend.account.store') }}" method="post">
            <div class="box-body">
                {{ csrf_field() }}

                @if($errors->has('name'))
                    <div class="form-group has-feedback has-error">
                        <label class="control-label" for="name"><i class="fa fa-times-circle-o"></i> {{ $errors->first('name') }}</label>
                        @else
                    <div class="form-group">
                        <label for="name">User Type</label>
                        @endif
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                    </div>

                

                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('backend.account.index') }}" class="btn btn-default">Cancel</a>
                    </div>
            </div>
        </form>
    </div>
@stop
