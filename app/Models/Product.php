<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property HasMany $defaultImage
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'sku', 'color', 'material', 'price'];

    /**
     * @return BelongsToMany
     */
    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * @return HasMany
     */
    public function images() : HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    /**
     * @return HasMany
     */
    public function defaultImage() : HasMany
    {
        $result = $this->hasMany(ProductImage::class)->where('default', '=', 1);
        if ($result->count() == 0) {
            $result = $this->hasMany(ProductImage::class);
        }
        return $result;
    }
}
