<main id="main" class="main-site left-sidebar">

    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Accueil</a></li>
                <li class="item-link"><span>Whishlist</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content-area">

                <div class="wrap-shop-control">

                   <h1 class="shop-title">Whish List</h1>

                </div><!--end wrap shop control-->

                <div class="row">
                    
                    @if(Cart::instance('wishlist')->content()->count() > 0)
                    <ul class="product-list grid-products equal-container">
                        @php
                            $witems = Cart::instance('wishlist')->content()->pluck('id');
                        @endphp
                        @foreach(Cart::instance('wishlist')->content() as $item)
                        <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ route('product.details', ['slug'=>$item->model->slug]) }}" title="{{ $item->model->name }}">
                                        <figure><img src="{{ asset('assets/images/products')}}/{{ $item->model->image }}" alt="{{ $item->model->name }}"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('product.details', ['slug'=>$item->model->slug]) }}" class="product-name"><span>{{ $item->model->name }}</span></a>
                                    <div class="wrap-price"><span class="product-price">{{ $item->model->regular_price }}</span></div>
                                    <a href="#" class="btn add-to-cart" wire:click.prevent="moveProductFromWishlistToCart('{{ $item->rowId }}')">Ajouter au panier</a>
                                    <div class="product-wish">
                                        <a href="#" wire:click.prevent="removeFromWishlist({{ $item->model->id }})"><i class="fa fa-heart fill-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                   
                    </ul>
                    @else
                    <div class="col-md-12">
                    <br/>
                    <h4>Pas de produit</h4>
                    @endif
                    </div>

                </div>

                
            </div><!--end main products area-->

        </div><!--end row-->

    </div><!--end container-->

</main>
