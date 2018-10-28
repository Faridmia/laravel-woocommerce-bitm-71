<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Order;
use App\OrderDetail;
use App\PaymentMethod;
use App\Shipping;
use Illuminate\Support\Facades\DB;
use App\goal;


use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function manageOrderInfo(){
      $orderDetails =  DB::table('orders')
            ->join('customers','orders.customer_id', '=', 'customers.id')
            ->join('payment_methods','orders.id', '=', 'payment_methods.order_id')
            ->select('orders.*','customers.first_name','customers.last_name','payment_methods.payment_type','payment_methods.payment_status')
            ->get();


        return view('admin.order.manage-order',[
           'orderDetails'=>$orderDetails
        ]);
    }

    public function viewOrderDetail($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $payment = PaymentMethod::where('order_id',$order->id)->first();
        $shipping =  Shipping::find($order->shipping_id);
        $orderDetails =  OrderDetail::where('order_id',$order->id)->get();
        return view('admin.order.view-order',[
            'order' => $order,
            'customer' => $customer,
            'payment' => $payment,
            'shipping' => $shipping,
            'orderDetails' => $orderDetails
        ]);

    }
}
