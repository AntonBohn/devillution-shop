<?php
use App\Models\Product
/* @var Product $product */
?>
<li class="product-tile">
    @if($product->images->count() > 0)
    <div class="image-wrapper">
        <a href="{{ route('product', ['product' => $product]) }}">
            <img src="{{$product->defaultImage->first()->getImageUrl()}}" alt="">
        </a>
    </div>
    @endif
    <div class="details">
        <h4 class="product-name">
            <a href="{{ route('product', ['product' => $product]) }}">{{ $product->name }}</a>
        </h4>
        @include('catalog.product.price')
        @include('catalog.product.add-to-cart')
    </div>
    @if ($product->highlight)
        <div class="bookmark-icon">
            <div></div>
        </div>
    @endif
</li>
