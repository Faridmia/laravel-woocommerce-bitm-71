@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>SL-NO</th>
                            <th>Customer Name</th>
                            <th>Order Total</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i = 1)
                        @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $orderDetail->first_name.' '.$orderDetail->last_name }}</td>
                                <td>{{ $orderDetail->order_total }}</td>
                                <td>{{ $orderDetail->created_at }}</td>
                                <td>{{ $orderDetail->order_status }}</td>
                                <td>{{ $orderDetail->payment_type }}</td>
                                <td>{{ $orderDetail->payment_status }}</td>
                                <td>
                                        <a href="{{ route('view-order-details', ['id' => $orderDetail->id]) }}" class="btn btn-info btn-xs" title="view order details">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                        <a href="{{ route('published-category', ['id' => $orderDetail->id]) }}" class="btn btn-warning btn-xs" title="View order invoice">
                                            <span class="glyphicon glyphicon-zoom-out"></span>
                                        </a>
                                    <a href="{{ route('edit-category', ['id' => $orderDetail->id]) }}" class="btn btn-success btn-xs" title="Download order Invoice">
                                        <span class="glyphicon glyphicon-download"></span>
                                    </a>
                                    <a href="{{ route('edit-category', ['id' => $orderDetail->id]) }}" class="btn btn-success btn-xs" title="Edit order">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-category', ['id' => $orderDetail->id]) }}" class="btn btn-danger btn-xs" title="Delete Order">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>

@endsection