@extends('layout.default')

@section('content')

    @include('components.catalog.product.mini-list', ['title' => 'Für Sie empfohlen', 'products' => $category->products])
@endsection
