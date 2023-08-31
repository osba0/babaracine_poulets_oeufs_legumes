<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title fw-semibold mb-0">Liste des Commandes</h5>
                        </div>
                        <div class="col-md-6 text-end">
                            
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            <strong>Succés {{ Session::get('message') }}</strong>
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

