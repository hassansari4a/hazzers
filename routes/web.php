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
})->name('/');

Route::get('/register', function () {
    return view('register');
});

Route::get('/my-products', function () {
    return view('my-products');
});



Auth::routes();
//shop
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/shop/category/{category}', 'CategoryController@show')->name('shop.category');

//cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/{slug}', 'CartController@store')->name('cart.store');
Route::get('/checkout', 'CartController@getCheckout')->name('checkout');

//login logout routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//admin routes
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

//new products
Route::get('/new-product', 'NewProductController@index')->name('newproduct');
Route::post('/new-product', 'NewProductController@store')->name('newproduct.submit');

//Product Dashboard
Route::get('/my-products', 'MyProductsController@index')->name('myproducts');
Route::get('/edit-listing/{slug}', 'MyProductsController@edit')->name('editproduct');
Route::POST('/edit-listing/{slug}', 'MyProductsController@update')->name('editproduct.submit');
Route::POST('/deleted/{slug}','MyProductsController@destroy')->name('deleteproduct');

//Search Function
Route::get('/search', 'ShopController@search')->name('search');