<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                   <div class="row">
                        <div class="col-md-6">
                            <h3 class="fw-semibold mb-0">Tous les Produits</h3>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="{{ route('admin.addproduct') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nouveau Produit</a>
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
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Poids</th>
                                <th>Stock</th>
                                <th>Prix</th>
                                <th>Categorie</th>
                                <th>Etat</th>
                                <th>Date</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin_products as $product)
                            <tr>
                                <td class="align-middle">{{ $product->id }}</td>
                                <td class="align-middle"><img src="{{ asset('assets/images/products/'.$product->image)}}" style="height: 60px"/></td>
                                <td class="align-middle">{{ $product->name }}</td>
                                <td class="align-middle">{{ $product->weight }}</td>
                                <td class="align-middle">{{ $product->stock_status}}</td>
                                <td class="align-middle">{{ $product->regular_price }}</td>
                                <td class="align-middle">{{ $product->category->name }}</td>
                                <td class="align-middle">
                                     <label class="switch">
                                      <input type="checkbox" disabled {{ $product->status==0?'':'checked' }} />
                                      <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="align-middle">{{ $product->created_at }}</td>
                                <td class="text-end align-middle">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a class="btn btn-warning me-2" href="{{ route('admin.editproduct', ['product_slug'=> $product->slug]) }}">
                                            Editer
                                        </a>
                                         <a onclick="confirm('Etes-vous sûre de bien vouloir supprimer?') || event.stopImmediatePropagation()" class="btn btn-danger cursor-pointer" wire:click.prevent="deleteProduct({{$product->id}})">
                                            Supprimer
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                     <div class="wrap-pagination-info">
                        {{ $admin_products->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

