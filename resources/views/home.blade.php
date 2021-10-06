@extends('layout.default')

@section('content')
    <header>
        <h1><span class="iconify" data-icon="mdi-nuke"></span>NukeStore</h1>
        <label>
            <input type="text" placeholder="Suche">
        </label>
    </header>
    <h2>Für Sie Empfohlen</h2>
    <ul class="product-list">
        @foreach($products as $product)
            @include('catalog.product.list.tile', ['product' => $product])
        @endforeach
    </ul>
@endsection
