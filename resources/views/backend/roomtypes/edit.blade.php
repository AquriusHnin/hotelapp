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

                        @foreach($roomtypes as $roomtype)

                        <form role="form" action="{{ route('backend.roomtype.update',$roomtype->id) }}" method="post" enctype="multipart/form-data">

                            <div class="box-body">
                                {{ csrf_field() }}

                                @if($errors->has('name'))
                                <div class="form-group has-feedback has-error">
                                    <label class="control-label" for="name"><i class="fa fa-times-circle-o"></i> {{ $errors->first('name') }}</label>
                                    @else
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        @endif
                                        <input type="text" name="name" class="form-control" id="name" value="{{  $roomtype->name }}">
                                    </div>


                                    @if($errors->has('features'))
                                    <div class="form-group has-feedback has-error">
                                        <label class="control-label" for="features"><i class="fa fa-times-circle-o"></i> {{ $errors->first('features') }}</label>
                                        @else
                                        <div class="form-group">
                                            <label for="features">Features</label>
                                            @endif
                                            <textarea name="features" rows="10" class="form-control" id="features" value="{{  $roomtype->features }}"></textarea>
                                        </div>


                                        @if($errors->has('bed_no'))
                                        <div class="form-group has-feedback has-error">
                                            <label class="control-label" for="bed_no"><i class="fa fa-times-circle-o"></i> {{ $errors->first('bed_no') }}</label>
                                            @else
                                            <div class="form-group">
                                                <label for="bed_no">Bed No</label>
                                                @endif
                                                <input type="number" min="1" max="5" name="bed_no" class="form-control" id="bed_no" value="{{  $roomtype->bed_no }}">
                                            </div>


                                            @if($errors->has('count'))
                                            <div class="form-group has-feedback has-error">
                                                <label class="control-label" for="count"><i class="fa fa-times-circle-o"></i> {{ $errors->first('count') }}</label>
                                                @else
                                                <div class="form-group">
                                                    <label for="count">Count</label>
                                                    @endif
                                                    <input type="number" min="1" max="5" name="count" class="form-control" id="count" value="{{  $roomtype->count }}">
                                                </div>


                                                @if($errors->has('price'))
                                                <div class="form-group has-feedback has-error">
                                                    <label class="control-label" for="price"><i class="fa fa-times-circle-o"></i> {{ $errors->first('price') }}</label>
                                                    @else
                                                    <div class="form-group">
                                                        <label for="price">Price</label>
                                                        @endif
                                                        <input type="text" name="price" class="form-control" id="count" value="{{  $roomtype->price }}" >
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
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                            <a href="{{ route('backend.account.index') }}" class="btn btn-default">Cancel</a>
                                                        </div>
                                                    </div>
                                                </form>                 



                                                @endforeach




                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                                            {!! $roomtypes->render() !!}
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