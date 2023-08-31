    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">Accueil</a></li>
                    <li class="item-link"><span>Recherche</span></li>
                </ul>
            </div>
           
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content-area">

                    <div class="wrap-shop-control">

                       <h1 class="shop-title">Résultat recherche</h1>

                        <div class="wrap-right">

                            <div class="sort-item orderby ">
                                <select name="orderby" class="form-control" wire:model="sorting">
                                    <option value="default" selected="selected">Default sorting</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>

                            <div class="sort-item product-per-page">
                                <select name="post-per-page" class="form-control" wire:model="pagesize">
                                    <option value="2" selected="selected">2 per page</option>
                                    <option value="4">4 per page</option>
                                    <option value="6">6 per page</option>
                                    <option value="8">8 per page</option>
                                  
                                </select>
                            </div>

                        </div>

                    </div><!--end wrap shop control-->

                     @if($products->count() > 0)

                    <div class="row">

                        <ul class="product-list grid-products equal-container">
                            @foreach($products as $product)
                            <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('product.details', ['slug'=>$product->slug]) }}" title="{{ $product->name }}">
                                            <figure><img src="{{ asset('assets/images/products')}}/{{ $product->image }}" alt="{{ $product->name }}"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('product.details', ['slug'=>$product->slug]) }}" class="product-name"><span>{{ $product->name }}</span></a>
                                        <div class="wrap-price"><span class="product-price">{{ $product->regular_price }}</span></div>
                                        <a href="#" class="btn add-to-cart" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">Ajouter au panier</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                       
                        </ul>

                    </div>
                    @else

                    <p class="no-result">Aucun produit trouvé!</p>

                    @endif


                    <div class="wrap-pagination-info">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div><!--end main products area-->

            </div><!--end row-->
            

        </div><!--end container-->

    </main>
    <!--main area-->
