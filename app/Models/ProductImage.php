<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getImageUrl()
    {
        return URL::to('/img/media/products/' . $this->url);
    }
}
