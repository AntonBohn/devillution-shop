@if($product->images->count() > 0)
    <div class="product-gallery">
        <img src="{{ $product->defaultImage->first()->getImageUrl() }}">
        <div class="thumbnails">
            @foreach($product->images as $image)
                <img src="{{ $image->getImageUrl() }}" alt="">
            @endforeach
        </div>
    </div>
@endif

