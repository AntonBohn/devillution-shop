<?php
use App\Models\Product
/* @var Product $product */
?>
<div class="product-details">
    @include('catalog.product.price')
    @include('catalog.product.add-to-cart')
    <div class="short-description-text">
        {{ $product->ShortDescription }}
    </div>
</div>
