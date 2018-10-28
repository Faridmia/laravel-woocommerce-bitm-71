
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
                    <div class="col-md-12 well">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 well">
                        <h3 class="text-center text-primary">Register Here....</h3><hr/>
                        {{ Form::open(['method' => 'POST','class' => 'form-horizontal']) }}
                        <div class="form-group">
                            <label class="control-label col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input type="text" name="first_name" class="form-control">
                                {{--<span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" name="last_name" class="form-control">
                                {{--<span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">E-mail Address</label>
                            <div class="col-md-9">
                                <input type="email" name="email_address" class="form-control">
                                {{--<span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" class="form-control">
                                {{--<span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Phone Number</label>
                            <div class="col-md-9">
                                <input type="text" name="phone_number" class="form-control">
                                {{--<span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>--}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Address</label>
                            <div class="col-md-9">
                                <textarea name="address" class="form-control"></textarea>
                                {{--<span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" value="Registered" class="btn btn-success btn-block">
                            </div>
                        </div>

                        {{ Form::close() }}


                    </div>

                    <div class="col-md-5 well" style="margin-left:20px;">
                        <h3 class="text-center">Login here.....!</h3><hr/>
                        <h4 class="text-center text-danger">{{ Session::get('message') }}</h4><br/>
                        {{ Form::open(['method' => 'POST','class' => 'form-horizontal']) }}
                        <div class="form-group">
                            <label class="control-label col-md-3">Email Address</label>
                            <div class="col-md-9">
                                <input type="email" name="email_address" class="form-control">
                                {{--<span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" class="form-control">
                                {{--<span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" value="Login" class="btn btn-success btn-block">
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