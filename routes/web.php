<?php

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
    return view('pages/home');
});
Route::get('/products', function () {
    return view('pages/products');
});
Route::get('/product-detail', function () {
    return view('pages/product-detail');
});
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/cart', function () {
    return view('pages/cart');
});
Route::get('/checkout', function () {
    return view('pages/checkout');
});
