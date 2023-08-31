<main id="main">
    <div class="slider_container">
            <div class="container">
                <!--MAIN SLIDE-->
                <div class="wrap-main-slide">
                    <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                         @foreach($sliders as $slider)
                        <div class="item-slide">
                            <img src="{{ asset('/assets/images/sliders/'.$slider->image)}}" alt="" class="img-slide">
                            <div class="slide-info slide-1">
                                <h2 class="f-title">{!! $slider->title !!}</h2>
                                <span class="subtitle">{{ $slider->subtitle }}</span>
                                <p class="sale-info">A partir de: <span class="price">{{ $slider->price }} FCFA</span></p>
                                <a href="{{$slider->link}}" class="btn-link">Commandez maintenant <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                         @endforeach
                    
                    </div>

                </div>
                
            </div>
    </div>
    <div id="arrow-down-buy">
        <center><i class="fa fa-caret-down"></i></center>
    </div>
            <div class="container">

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
                                <div class="wrap-price">
                                    @if($product->weight)
                                        <span class="product-kg">
                                            {{ $product->weight }} KG 
                                        </span>
                                    @endif
                                    <span class="product-price">{{ $product->regular_price }}</span></div>
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">Ajouter au panier</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
               
                </ul>

            </div>
        

        </div>

</main>
