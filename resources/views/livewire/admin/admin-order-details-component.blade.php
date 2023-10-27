<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title fw-semibold mb-0">Ordered Details</h5>
                        </div>
                         <div class="col-md-6 text-end">
                            <a href="{{ route('admin.orders') }}" class="btn btn-success">All orders</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <table class="table">
                                    <tr>
                                        <th>Order ID</th>
                                        <td>{{ $order->id }}</td>
                                        <th>Order Date</th>
                                        <td>{{ $order->created_at }}</td>
                                        <th>Status</th>
                                        <td>{{ $order->status }}</td>
                                        @if($order->status == 'delivered')
                                            <th>Delivered Date</th>
                                            <td>{{ $order->delivered_date }}</td>
                                        @elseif($order->status == 'canceled')
                                            <th>Canceled Date</th>
                                            <td>{{ $order->canceled_date }}</td>
                                        @endif
                                    </tr>
                                   
                                </table>

                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title fw-semibold mb-0">Ordered Item</h5>
                        </div>
                         <div class="col-md-6 text-end">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="wrap-iten-in-cart">
                                <ul class="products-cart">

                                    @foreach($order->orderItems as $item)
                                    <li class="d-flex justify-content-between align-items-center border-top">
                                        <div class="product-image">
                                            <figure class="mb-0"><img src="{{ asset('assets/images/products') }}/{{ $item->product->image }}" alt="" height="60"></figure>
                                        </div>
                                        <div class="product-name">
                                            <a class="link-to-product" href="{{ route('product.details', ['slug' => $item->product->slug]) }}">{{ $item->product->name }}</a>
                                        </div>
                                        <div class="price-field produtc-price"><p class="price mb-0">{{ $item->price }} FCFA</p></div>
                                        <div class="quantity">
                                           {{ $item->quantity }}
                                        </div>
                                        <div class="price-field sub-total"><p class="price mb-0">{{ $item->price *  $item->quantity }} FCFA</p></div>
                                        
                                    </li>
                                    @endforeach
                                                                                
                                </ul>
                               
                            </div>
                            <div class="summary">
                                <div class="order-summary">
                                    <h6 class="title-box">Order summary</h6>
                                    <p class="d-flex justify-content-between align-items-center"><span class="title">Subtotal</span><b class="index">{{ $order->subtotal }} FCFA</b></p>
                                    <p class="d-flex justify-content-between align-items-center"><span class="title">Tax</span><b class="index">{{ $order->tax }} FCFA</b></p>
                                    <p class="d-flex justify-content-between align-items-center"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                                    <p class="d-flex justify-content-between align-items-center"><span class="title">Total</span><b class="index">{{ $order->total }} FCFA</b></p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title fw-semibold mb-0">Billing Details</h5>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>First name</th>
                                        <td>{{ $order->firstname }}</td>
                                        <th>Last name</th>
                                        <td>{{ $order->lastname }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ $order->mobile }}</td>
                                        <th>Email</th>
                                        <td>{{ $order->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Line1</th>
                                        <td>{{ $order->line1 }}</td>
                                        <th>Line2</th>
                                        <td>{{ $order->line2 }}</td>
                                    </tr>
                                     <tr>
                                        <th>City</th>
                                        <td>{{ $order->city }}</td>
                                        <th>Provence</th>
                                        <td>{{ $order->provence }}</td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td>{{ $order->country }}</td>
                                        <th>Zipcode</th>
                                        <td>{{ $order->zipcode }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($order->is_shipping_different)
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title fw-semibold mb-0">Shipping Details</h5>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>First name</th>
                                        <td>{{ $order->shipping->firstname }}</td>
                                        <th>Last name</th>
                                        <td>{{ $order->shipping->lastname }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ $order->shipping->mobile }}</td>
                                        <th>Email</th>
                                        <td>{{ $order->shipping->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Line1</th>
                                        <td>{{ $order->shipping->line1 }}</td>
                                        <th>Line2</th>
                                        <td>{{ $order->shipping->line2 }}</td>
                                    </tr>
                                     <tr>
                                        <th>City</th>
                                        <td>{{ $order->shipping->city }}</td>
                                        <th>Provence</th>
                                        <td>{{ $order->shipping->provence }}</td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td>{{ $order->shipping->country }}</td>
                                        <th>Zipcode</th>
                                        <td>{{ $order->shipping->zipcode }}</td>
                                    </tr>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
     <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title fw-semibold mb-0">Transaction</h5>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>Transaction Mode</th>
                                        <td>{{ $order->transaction->mode }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{ $order->transaction->status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Transaction Date</th>
                                        <td>{{ $order->transaction->created_at }}</td>
                                    </tr>
                                   
                                   
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

