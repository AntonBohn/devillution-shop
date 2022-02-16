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
        <div class="thumbnails">
            @foreach($product->images as $key => $image)
                <img src="{{ $image->getImageUrl() }}" alt="">
            @endforeach
        </div>
        <div class="buttons">
            <button> Back</button>
            <button> Fwd</button>
        </div>
        <div class="button-fwd">
            <span class="iconify" data-icon="chevron-right"></span>
        </div>
        <div class="button-back">
            <span class="iconify" data-icon="chevron-left"></span>
        </div>
    </div>
@endif

