@extends('layout.default')

@section('content')
    @include('components.hero', ['header' => 'Lorem ipsum dolor sit amet'])
    <main>
        @include('components.catalog.product.mini-list', ['title' => 'Für Sie empfohlen', 'products' => $products])
        @include('components.catalog.product.mini-list', ['title' => 'Best Seller', 'products' => $bestsellers])
    </main>
@endsection
