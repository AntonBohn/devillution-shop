<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function renderProductPage (Product $product) {
        return view('product-page', [
            'pageTitle' => 'product-page',
            'product' => $product,
            'bodyClass' => 'page-product'
        ]);
    }
}
