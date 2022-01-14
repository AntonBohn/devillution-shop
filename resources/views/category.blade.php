<?php
use App\Models\Category
/* @var Category $category */
?>
@extends('layout.default')

@section('content')
    @include('components.hero', ['header' => 'Lorem ipsum dolor sit amet', 'image' => $category->image])
    <div class="category-page">
        @include('components.catalog.product.mini-list', ['title' => $category->name, 'products' => $category->products])
    </div>
@endsection
