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


Route::get('admin/index', function () {
    return view('admin.pages.index');
})->name('admin.index');
Route::get('/', 'Frontend\HomePageController@index')->name('home');
Route::get('san-pham', 'Frontend\ProductController@index')->name('product');
Route::get('san-pham/{slug}', 'Frontend\ProductController@getProductByCategory')->name('products');
Route::get('chi-tiet-san-pham/{slug}', 'Frontend\ProductController@productDetail')->name('product_detail');
Route::get('gio-hang', 'Frontend\CartController@index')->name('cart');
Route::get('them-gio-hang/{id}', 'Frontend\CartController@addCart')->name('add_cart');

Route::group(['prefix' => 'admin'], function() {
    Route::get('login', 'Admin\LoginController@index')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
});
