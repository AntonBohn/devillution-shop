<?php

use App\Http\Controllers\CmsPageController;
use App\Http\Controllers\ProductPageController;
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
        'products' => Product::all()->take(6),
        'bestsellers' => Product::all()->skip(6)->take(6)
    ]);
})->name('home');

Route::get('/category-{category}', function (Category $category) {
    return view('category', [
        'pageTitle' => 'category',
        'category' => $category,
    ]);
})->name('category');

Route::get('product-page-{product}', [ProductPageController::class, 'renderProductPage'])->name('product');

Route::get('/product-search', [ProductSearchController::class, 'search'])->name('product.search');

Route::get('/cms/{cmsPage}', [CmsPageController::class, 'render'])->name('cms.pages');



Route::get('/playground', function () {
    return view('playground');
});
