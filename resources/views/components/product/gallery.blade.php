<?php
use App\Models\ProductImage
/** @var ProductImage $getImageUrl */
?>

@if($product->images->count() > 0)
    <div class="product-gallery">
        <div class="slider">
            @foreach($product->images as $key => $image)
                <img src="{{ $image->getImageUrl() }}" alt="">
            @endforeach
        </div>
        <div class="slider-buttons">
            <span class="slider-buttons__back">
                <span class="iconify" data-icon="mdi-menu-left"></span>
            </span>
            <span class="slider-buttons__fwd">
                <span class="iconify" data-icon="mdi-menu-right"></span>
            </span>
        </div>
        <div class="thumbnails">
            @foreach($product->images as $key => $image)
                <img src="{{ $image->getImageUrl() }}" alt="">
            @endforeach
        </div>
    </div>
@endif

