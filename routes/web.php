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
Route::get('/', 'Frontend\HomePageController@index');
Route::get('san-pham', 'Frontend\ProductController@index')->name('product');
Route::get('san-pham/{slug}', 'Frontend\ProductController@getProductByCategory')->name('products');

Route::group(['prefix' => 'admin'], function() {
    Route::get('login', 'Admin\LoginController@index')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
});
