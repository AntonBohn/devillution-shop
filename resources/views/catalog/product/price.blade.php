<?php
use App\Models\Product
/* @var Product $product */
?>
<span class="product-price">
    {{ $product->price }}&nbsp;
    <span class="currency">
        {{ config('shop.currency.symbol') }}
    </span>
</span>
