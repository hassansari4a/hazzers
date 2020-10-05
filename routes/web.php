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
    return view('welcome');
})->name('welcome');

Route::get('/register', function () {
    return view('register');
});

Route::get('/cart', function () {
    return view('cart');
});

Auth::routes();

Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('/new-product', 'NewProductController@index')->name('newproduct');
Route::post('/new-product', 'NewProductController@store')->name('newproduct.submit');