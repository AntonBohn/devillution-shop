@extends('layout.default')

@section('content')
    <header>
        <h1>Mein Shop</h1>
        <label>
            <input type="text" placeholder="Suche">
        </label>
    </header>
    <h2>Für Sie</h2>
    <ul class="grid-container">
            @foreach($products as $product)
                @include('catalog.product.list.tile', ['product' => $product])
        @endforeach
    </ul>
@endsection
