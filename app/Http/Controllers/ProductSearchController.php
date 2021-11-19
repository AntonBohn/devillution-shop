<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductSearchRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductSearchController extends Controller
{
    public function search(ProductSearchRequest $request)
    {
        $search = $request->input('search');

        $products = Product::where('name', 'LIKE', "%$search%")->get();

        return view('product-search', [
            'pageTitle' => 'Suchergebnis',
            'categories' => Category::all(),
            'products' => $products,
            'search' => $search,
        ]);
    }
}
