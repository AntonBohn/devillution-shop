<?php

use App\Http\Controllers\ProductSearchController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'Home',
        'categories' => Category::all(),
        'products' => Product::all()->take(6),
        'bestsellers' => Product::all()->skip(6)->take(6)
    ]);
});

Route::get('/category-{id}', function (int $id) {
    return view('category', [
        'pageTitle' => 'category',
        'categories' => Category::all(),
        'category' => Category::find($id),
    ]);
});

Route::get('/product-search', [ProductSearchController::class, 'search'])->name('product.search');



Route::get('/playground', function () {
    return view('playground');
});
