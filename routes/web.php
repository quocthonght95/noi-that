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
Route::get('mua-hang', 'Frontend\CartController@getOrder')->name('getOrder');
Route::post('mua-hang/{id}', 'Frontend\CartController@postOrder')->name('postOrder');
Route::get('login', 'LoginController@getLogin')->name('getLogin');
Route::post('login', 'LoginController@postLogin')->name('postLogin');
Route::get('logout', 'LoginController@logout')->name('logout');
Route::get('register', 'RegisterController@getRegister')->name('getRegister');
Route::post('register', 'RegisterController@postRegister')->name('postRegister');
Route::get('activate/{email}/{activationCode}', 'ActivationController@activate')->name('activate');
Route::get('forgot-password', 'ForgotPasswordController@forgotPassword')->name('getforgot-password');
Route::post('forgot-password', 'ForgotPasswordController@postForgotPassword')->name('forgot-password');
Route::get('reset/{email}/{resetCode}', 'ForgotPasswordController@resetPassword')->name('getreset-password');
Route::post('reset/{email}/{resetCode}', 'ForgotPasswordController@postResetPassword')->name('reset-password');

Route::group(['prefix' => 'admin'], function() {
    Route::get('login', 'Admin\LoginController@index')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['prefix' => 'category'], function() {
        Route::get('add', 'Admin\CategoryController@getCreate')->name('admin.category.getCreate');
        Route::post('add', 'Admin\CategoryController@postCreate')->name('admin.category.postCreate');
        Route::get('show', 'Admin\CategoryController@show')->name('admin.category.show');
        Route::get('edit/{slug}', 'Admin\CategoryController@getEdit')->name('admin.category.getEdit');
        Route::post('edit/{id}', 'Admin\CategoryController@postEdit')->name('admin.category.postEdit');
        Route::get('destroy/{slug}', 'Admin\CategoryController@destroy')->name('admin.category.destroy');
    });
    Route::group(['prefix' => 'products'], function() {
        Route::get('add', 'Admin\ProductController@getCreate')->name('admin.products.getCreate');
        Route::post('add', 'Admin\ProductController@postCreate')->name('admin.products.postCreate');
        Route::get('show', 'Admin\ProductController@show')->name('admin.products.show');
        Route::get('edit/{slug}', 'Admin\ProductController@getEdit')->name('admin.products.getEdit');
        Route::post('edit/{id}', 'Admin\ProductController@postEdit')->name('admin.products.postEdit');
        Route::get('destroy/{slug}', 'Admin\ProductController@destroy')->name('admin.products.destroy');
    });
});
