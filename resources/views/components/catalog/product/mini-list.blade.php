<div class="product-mini-list">
    <h3>{{ $title }}</h3>
    <ul class="product-list">
        @foreach($products as $product)
            @include('catalog.product.list.tile', ['product' => $product])
        @endforeach
    </ul>
</div>
