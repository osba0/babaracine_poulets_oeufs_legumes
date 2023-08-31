<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-6">
                             <h5 class="card-title fw-semibold mb-0">Toutes les catégories</h5>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="{{ route('admin.addcoupon') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nouvelle Coupon</a>
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
                                <th>ID</th>
                                <th>Coupon Code</th>
                                <th>Coupon Type</th>
                                <th>Coupon Value</th>
                                <th>Cart value</th>
                                <th>Expiry Date</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupons as $coupon)
                            <tr>
                                <td>{{ $coupon->id }}</td>
                                <td>{{ $coupon->code }}</td>
                                <td>{{ $coupon->type }}</td>
                                @if($coupon->type == "fixed")
                                    <td>{{ $coupon->value }} FCFA</td>
                                @else
                                    <td>{{ $coupon->value }} %</td>
                                @endif
                                <td>{{ $coupon->cart_value }}</td>
                                <td>{{ $coupon->expiry_date }}</td>
                              
                               
                                <td class="text-end">
                                    <a class="btn btn-warning" href="{{ route('admin.editcoupon', ['coupon_id'=> $coupon->id]) }}">
                                        Edit
                                    </a>
                                     <a onclick="confirm('Etes-vous sûre de bien vouloir supprimer?') || event.stopImmediatePropagation()" class="btn btn-danger cursor-pointer" wire:click.prevent="deleteCategory({{$coupon->id}})">
                                        Supprimer
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                     <div class="wrap-pagination-info">
                        {{ $coupons->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
