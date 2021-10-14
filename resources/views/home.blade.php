@extends('layout.default')

@section('content')
    @include('components.hero', ['header' => 'Nuke Ware Store'])
    <h2>Für Sie Empfohlen</h2>
    <ul class="product-list">
        @foreach($products as $product)
            @include('catalog.product.list.tile', ['product' => $product])
        @endforeach
    </ul>
@endsection
