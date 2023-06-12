<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Main page
Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('contact');

//Shop
Route::get('/shop', 'App\Http\Controllers\ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'App\Http\Controllers\ShopController@show')->name('shop.show');


//cart
Route::get('/cart', 'App\Http\Controllers\HomeController@cart')->name('cart.index');

//Checkout
Route::get('/checkout', 'App\Http\Controllers\HomeController@checkout')->name('checkout.index');
Route::get('/checkout/success', 'App\Http\Controllers\HomeController@success')->name('checkout.success');

//Orders
Route::get('/orders', 'App\Http\Controllers\HomeController@orders')->name('orders');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//Authentification
Auth::routes();

Route::get('/logout', function() {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

