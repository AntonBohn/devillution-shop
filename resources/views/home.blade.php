@extends('layout.default')

@section('content')
    @include('components.hero', ['header' => 'Lorem ipsum dolor sit amet'])
    <h3>Für Sie empfohlen</h3>
    <ul class="product-list">
        @foreach($products as $product)
            @include('catalog.product.list.tile', ['product' => $product])
        @endforeach
    </ul>
    <h3>Best Seller</h3>
    <ul class="product-list">
        @foreach($bestsellers as $bestseller)
            @include('catalog.product.list.tile', ['product' => $bestseller])
        @endforeach
    </ul>
@endsection
