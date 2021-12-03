@extends('layout.default')

@section('content')
    <div class="product-page">
        <div class="product-image">
            <img src="{{$product->images}}" alt="">
        </div>
        <div class="product-page-name">
            {{ $product->name }}
        </div>
        @include('catalog.product.price')
        <div class="short-description-text">
            {{ $product->ShortDescription }}
        </div>
        <div class="description-text">
            {{ $product->description }}
        </div>
    </div>
    {{--    @include('catalog.product.add-to-cart')--}}
@endsection
