<div class="product-details">
    <div class="product-page-name">
        {{ $product->name }}
    </div>
    @include('catalog.product.price')
    <div class="short-description-text">
        {{ $product->ShortDescription }}
    </div>
</div>
