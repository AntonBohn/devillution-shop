@extends('layout.default')

@section('content')
    <div class="product-page">
        <div class="product-image">
            <img src="{{$product->images}}" alt="">
        </div>
        @include('product-details')
        <div class="description-text">
            {{ $product->description }}
        </div>
    </div>
    {{--    @include('catalog.product.add-to-cart')--}}
@endsection
