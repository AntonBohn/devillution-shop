<?php
use App\Models\Product
/* @var Product $product */
?>
@extends('layout.default')

@section('content')
    <div class="product-page">
        <div class="product-page-name">
            {{ $product->name }}
        </div>
        <div class="product-image">
            @include('components.product.gallery')
        </div>
        @include('catalog.product.product-details')
        <div class="description-text">
            {{ $product->description }}
        </div>
    </div>
@endsection
