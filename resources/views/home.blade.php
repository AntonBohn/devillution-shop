@extends('layout.default')

@section('content')
    @include('components.hero', ['header' => 'Nuke Ware Store'])
    <h2>Für Sie empfohlen</h2>
    <ul class="product-list">
        @foreach($products as $product)
            @include('catalog.product.list.tile', ['product' => $product])
        @endforeach
    </ul>
    <h2>Bestseller</h2>
    <ul class="product-list">
        @foreach($bestsellers as $bestseller)
            @include('catalog.product.list.tile', ['product' => $bestseller])
        @endforeach
    </ul>
@endsection
