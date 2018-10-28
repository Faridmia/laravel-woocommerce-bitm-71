
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
                    <div class="col-md-12 well text-center text-success">
                        <br/>
                        Dear {{ Session::get('customerName') }}. You have to give us product shipping payment option.

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 well">
                       {{ Form::open(['route' => 'new-order','method' => 'POST']) }}
                           <table class="table table-bordered table-responsive">
                               <tr>
                                   <td>Cash On Delivery</td>
                                   <td><input type="radio" name="payment_type" value="Cash"/>Cash On Delivery </td>
                               </tr>
                               <tr>
                                   <th>Paypal</th>
                                   <td><input type="radio" name="payment_type" value="Paypal"/>Paypal</td>
                               </tr>
                               <tr>
                                   <th>Bkash</th>
                                   <td><input type="radio" name="payment_type" value="Bkash"/>Bkash</td>
                               </tr>
                               <tr>
                                   <th></th>
                                   <td><input type="submit" name="btn" value="Confirm Order"/></td>
                               </tr>

                           </table>
                       {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        <!--single-->

    </div>
@endsection