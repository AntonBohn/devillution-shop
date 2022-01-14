<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\URL;

/**
 * @property BelongsTo $product
 */

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'product_id'];

    /**
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return URL::to('/img/media/products/' . $this->url);
    }
}
