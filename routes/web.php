<?php

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
        'bestsellers' => Product::all()->take(6)
    ]);
});

Route::get('/playground', function () {
    return view('playground');
});
