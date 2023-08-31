<div class="wrap-search-form">
    <form action="{{ route('product.search') }}" id="form-search-top" name="form-search-top">
        <input type="hidden" name="product_cat" value="{{ $product_cat }}" id="product-cate">
        <input type="hidden" name="product_cat_id" value="{{ $product_cat_id }}" id="product-cat-id">

        <input type="text" name="search" value="{{ $search }}" placeholder="Rechercher un produit...">
        <button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
</div>
