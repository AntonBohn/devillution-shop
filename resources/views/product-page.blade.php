@extends('layout.default')

@section('content')
    <div class="product-page">
        <div class="product-page-name">
            {{ $product->name }}
        </div>
        <div class="product-image">
            <img src="{{$product->images}}" alt="">
        </div>
        @include('catalog.product.product-details')
        <div class="description-text">
            {{ $product->description }}
        </div>
    </div>
@endsection
