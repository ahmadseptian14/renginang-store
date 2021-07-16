<?php

use Illuminate\Support\Facades\Auth;
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
Route::prefix('dashboard')->namespace('Admin')->middleware(['auth', 'admin'])->group(function() {
    Route::resource('/', 'DashboardController');

    Route::resource('/product', 'ProductController');
    Route::resource('/product-gallery', 'ProductGalleryController');

    Route::get('/transactions', 'TransactionController@index')->name('dashboard-transactions');

    Route::post('/status-transaction/{id}', 'TransactionController@updateTransaction')
                ->name('update-status-transaction');

    Route::get('/transactions/{id}', 'TransactionController@details')
                ->name('transaction-details');
                
    Route::post('/transactions/{id}', 'TransactionController@update')
                ->name('shipping-update');

    // Route::get('/transaction/edit/{$id}', 'TransactionController@edit')->name('edit-transaction');

});




Route::get('/', 'HomeController@index')->name('home');

Route::get('/products', 'ProductsController@index')->name('products');

Route::get('/details/{id}', 'DetailController@index')->name('details');
Route::post('/details/{id}', 'DetailController@add')->name('details-add');

Route::get('/success', 'CartController@success')->name('success');


Route::group(['middleware' => ['auth']], function(){
    Route::get('/cart', 'CartController@index')->name('cart');
    Route::delete('/cart/{id}', 'CartController@delete')->name('cart-delete');
    Route::post('/checkout', 'CheckoutController@process')->name('checkout');
});





Auth::routes();

