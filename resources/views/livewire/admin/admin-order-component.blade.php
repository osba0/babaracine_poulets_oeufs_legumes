<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                   <div class="row">
                        <div class="col-md-6">
                            <h3 class="fw-semibold mb-3">Liste des Commandes</h3>
                        </div>
                        <div class="col-md-6 text-end">
                            
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('order_message'))
                        <div class="alert alert-success">
                            <strong>Succés {{ Session::get('order_message') }}</strong>
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>OrderID</th>
                                <th>SubTotal</th>
                                <th>Discount</th>
                                <th>Tax</th>
                                <th>Total</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Zipcode</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td class="align-middle">{{ $order->id }}</td>
                                <td class="align-middle">{{ $order->subtotal }} FCFA</td>
                                <td class="align-middle">{{ $order->discount }}</td>
                                <td class="align-middle">{{ $order->tax}} FCFA</td>
                                <td class="align-middle">{{ $order->total }} FCFA</td>
                                <td class="align-middle">{{ $order->firstname }}</td>
                                <td class="align-middle">{{ $order->lastname }}</td>
                                <td class="align-middle">{{ $order->mobile }}</td>
                                <td class="align-middle">{{ $order->email }}</td>
                                <td class="align-middle">{{ $order->zipcode }}</td>
                                <td class="align-middle">{{ $order->status }}</td>
                                <td class="align-middle">{{ $order->created_at }}</td>
                                <td class="align-middle">
                                    <a href="{{ route('admin.orderdetails', ['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Détails</a>
                                </td>
                                <td class="align-middle">
                                   
                                     <div class="dropdown">
                                          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Status
                                          </button>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#" wire:click.prevent="updateOrderStatus({{$order->id}}, 'delivered')">Delibered</a></li>
                                            <li><a class="dropdown-item" href="#" wire:click.prevent="updateOrderStatus({{$order->id}}, 'canceled')">Canceled</a></li>
                                          </ul>
                                        </div>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                     <div class="wrap-pagination-info">
                        {{ $orders->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

