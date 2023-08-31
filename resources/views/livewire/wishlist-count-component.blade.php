<div class="position-relative">
    <a href="{{ route('product.wishlist') }}" class="icon-wish">
        <i class="fa fa-heart"></i>
    </a>
    @if(Cart::instance('wishlist')->count() > 0)
        <span id="wishCount" class="index">{{ Cart::instance('wishlist')->count() }}</span>
    @endif
</div>
