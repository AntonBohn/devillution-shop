<li class="product-tile">
    <div class="image-wrapper">
        <img src="{{$product->images}}" alt="">
    </div>
    <div class="details">
        <h4 class="product-name">{{ $product->name }}</h4>
        @include('catalog.product.price')
        @include('catalog.product.add-to-cart')
    </div>
    @if ($product->highlight)
        <div class="bookmark-icon">
            <div></div>
        </div>
    @endif
</li>
