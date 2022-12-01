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
    return view('index');
});

Route::get('/all-products', function () {
    return view('shop.all_products');
});

Route::get('/product-details', function () {
    return view('shop.product_details');
});

Route::get('/login', function () {
    return view('users.login');
});

Route::get('/signup-new-user', function () {
    return view('users.signup_user');
});

Route::get('/signup-new-seller', function () {
    return view('users.signup_seller');
});

Route::get('/wishlist', function () {
    return view('orders.wishlist');
});

Route::get('/cart', function () {
    return view('orders.cart');
});

Route::get('/checkout', function () {
    return view('orders.checkout');
});

Route::get('/receipt', function () {
    return view('orders.receipt');
});

