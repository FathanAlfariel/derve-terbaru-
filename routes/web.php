<?php

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
    return view('homepage');
});

Route::get('/login2', function () {
    return view('login');
});

Route::get('/detail_restaurant', function () {
    return view('homepage/detail_restaurant');
});

Route::get('/seller', function () {
    return view('layouts/seller');
});

Route::get('/seller', function () {
    return view('seller/home/index');
});

Route::get('/produk_seller', function () {
    return view('seller/produk/index');
});

Route::get('/produk_create', function () {
    return view('seller/produk/create');
});

Route::get('/produk_edit', function () {
    return view('seller/produk/edit');
});

Route::get('/promo_seller', function () {
    return view('seller/promo/index');
});

Route::get('/promo_create', function () {
    return view('seller/promo/create');
});

Route::get('/promo_edit', function () {
    return view('seller/promo/edit');
});

Route::get('/restaurant_seller', function () {
    return view('seller/restaurant/index');
});

Route::get('/restaurant_create', function () {
    return view('seller/restaurant/create');
});

Route::get('/restaurant_edit', function () {
    return view('seller/restaurant/edit');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
