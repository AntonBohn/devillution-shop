@extends('layout.default')

@section('content')
    <div class="category-page">
        @include('components.catalog.product.mini-list', ['title' => __('product.search.title', ['search' => $search]), 'products' => $products])
    </div>
@endsection
