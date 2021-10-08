@extends('layout.default')

@section('content')
    <header>
        <span class="iconify" data-icon="mdi-nuke" ></span>
        @include('components.hero', ['header' => 'Nuke Ware Store'])
    </header>
    <h2>Für Sie Empfohlen</h2>
    <ul class="product-list">
        @foreach($products as $product)
            @include('catalog.product.list.tile', ['product' => $product])
        @endforeach
    </ul>
@endsection
