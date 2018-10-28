
@extends('front-end.master')

@section('body')

    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Single</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 well text-center text-success">
                        <br/>
                        Dear {{ Session::get('customerName') }}. You have to give us product shipping info to complete your valuable order. If your billing info & shipping info are same just press on save shipping info button

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 well">
                        <br/>
                        <h3 class="text-center text-primary">Shipping info goes here......</h3><hr/>
                        {{ Form::open(['route' => 'new-shipping','method' => 'POST','class' => 'form-horizontal']) }}
                        <div class="form-group">
                            <label class="control-label col-md-3">Full Name</label>
                            <div class="col-md-9">
                                <input type="text" name="full_name" value="{{ $customer->first_name.' '.$customer->last_name }}" class="form-control">
                                {{--<span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">E-mail Address</label>
                            <div class="col-md-9">
                                <input type="email" name="email_address" value="{{ $customer->email_address }}" class="form-control">
                                {{--<span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Phone Number</label>
                            <div class="col-md-9">
                                <input type="text" name="phone_number" value="{{ $customer->phone_number }}" class="form-control">
                                {{--<span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>--}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Address</label>
                            <div class="col-md-9">
                                <textarea name="address" class="form-control">{{ $customer->address }}</textarea>
                                {{--<span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" value="Save Shipping Info" class="btn btn-success btn-block">
                            </div>
                        </div>

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
        <!--single-->

    </div>
@endsection