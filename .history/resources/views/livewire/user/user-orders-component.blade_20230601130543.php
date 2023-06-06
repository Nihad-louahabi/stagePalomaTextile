<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="icon-start">
                    <div class="row">
                        <div class="col-xs-8 text-left">
                            <span class="icon-start-label">Total Cost</span>
                            <span class="icon-start-value">{{ $totalCost }}DH</span>
                        </div>
                        <div class="icon-start-footer">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>Updated Now

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">
                <div class="icon-start">
                    <div class="row">
                        <div class="col-xs-8 text-left">
                            <span class="icon-start-label">Total Purchase</span>
                            <span class="icon-start-value">{{ $totalPurchase }}</span>
                        </div>

                        <div class="icon-start-footer">
                            <i class="fa fa-clock-o"></i>Updated Now
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">
                <div class="icon-start">
                    <div class="row">
                        <div class="col-xs-8 text-left">
                            <span class="icon-start-label">Total Delivered</span>
                            <span class="icon-start-value">{{ $totalDelivered }}</span>
                        </div>
                        <div class="icon-start-footer">
                            <i class="fa fa-clock-o"></i>Updated Now

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">
                <div class="icon-start">
                    <div class="row">
                        <div class="col-xs-8 text-left">
                            <span class="icon-start-label">Total Canceled</span>
                            <span class="icon-start-value">{{ $totalCanceled }}</span>
                        </div>
                        <div class="icon-start-footer">
                            <i class="fa fa-clock-o"></i>Updated Now

                        </div>

                    </div>

                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-ms-12">
                <div class="card-header">
                    <div class="card-header">
                        <h4 class="mb-0">All Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>OrderId</th>
                                        <th>Subtotal</th>
                                        <th>Discount</th>
                                        <th>Tax</th>
                                        <th>Total</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Zipcode</th>
                                        <th>Status</th>
                                        <th>Order Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->subtotal }}DH</td>
                                        <td>{{ $order->discount }}DH</td>
                                        <td>{{ $order->tax }}DH</td>
                                        <td>{{ $order->total }}DH</td>
                                        <td>{{ $order->firstname }}</td>
                                        <td>{{ $order->lastname }}</td>
                                        <td>{{ $order->mobile }}</td>
                                        <td>{{ $order->email}}</td>
                                        <td>{{ $order->zipcode }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->created_at}}</td>
                                        <td><a href="{{ route('user.orderdetails',['order_id'=>$order->id]) }}" class="btn-info btn-sm">Details</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                        {{ $orders->links() }}

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
