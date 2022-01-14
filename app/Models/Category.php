<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property BelongsToMany $products
 */

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    /**
     * @return BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
