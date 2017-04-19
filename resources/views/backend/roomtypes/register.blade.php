@extends('layouts.app')

@section('main-content')


    
    <div class="box box-default">
        
        <!-- form start -->
        <form role="form" action="{{ route('backend.roomtype.store') }}" method="post" enctype="multipart/form-data">
            <div class="box-body">
                {{ csrf_field() }}

                @if($errors->has('name'))
                    <div class="form-group has-feedback has-error">
                        <label class="control-label" for="name"><i class="fa fa-times-circle-o"></i> {{ $errors->first('name') }}</label>
                        @else
                    <div class="form-group">
                        <label for="name">Name</label>
                        @endif
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                    </div>


                    @if($errors->has('features'))
                    <div class="form-group has-feedback has-error">
                        <label class="control-label" for="features"><i class="fa fa-times-circle-o"></i> {{ $errors->first('features') }}</label>
                        @else
                    <div class="form-group">
                        <label for="features">Features</label>
                        @endif
                        <textarea name="features" rows="10" class="form-control" id="features" placeholder="Enter features"></textarea>
                    </div>


                    @if($errors->has('bed_no'))
                    <div class="form-group has-feedback has-error">
                        <label class="control-label" for="bed_no"><i class="fa fa-times-circle-o"></i> {{ $errors->first('bed_no') }}</label>
                        @else
                    <div class="form-group">
                        <label for="bed_no">Bed No</label>
                        @endif
                        <input type="number" min="1" max="5" name="bed_no" class="form-control" id="bed_no" placeholder="Enter Bed No">
                    </div>


                    @if($errors->has('count'))
                    <div class="form-group has-feedback has-error">
                        <label class="control-label" for="count"><i class="fa fa-times-circle-o"></i> {{ $errors->first('count') }}</label>
                        @else
                    <div class="form-group">
                        <label for="count">Count</label>
                        @endif
                        <input type="number" min="1" max="5" name="count" class="form-control" id="count" placeholder="Enter Count">
                    </div>


                    @if($errors->has('price'))
                    <div class="form-group has-feedback has-error">
                        <label class="control-label" for="price"><i class="fa fa-times-circle-o"></i> {{ $errors->first('price') }}</label>
                        @else
                    <div class="form-group">
                        <label for="price">Price</label>
                        @endif
                        <input type="text" name="price" class="form-control" id="count" placeholder="Enter Price">
                    </div>


                    @if($errors->has('image'))
                    <div class="form-group has-feedback has-error">
                        <label class="control-label" for="image"><i class="fa fa-times-circle-o"></i> {{ $errors->first('image') }}</label>
                        @else
                    <div class="form-group">
                        <label for="image">Image</label>
                        @endif
                        <input type="file" name="image" class="form-control" id="image">
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
