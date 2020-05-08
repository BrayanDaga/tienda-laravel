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
Route::bind('product',function($slug){
    return App\Product::where('slug',$slug)->first();

});
Route::bind('category',function($category){
    return App\Category::find($category);

});

Route::resource('/', 'StoreController');
Route::get('/product/{slug}','StoreController@show')->name('product-detail');

Route::get('/cart/show','CartController@show')->name('cart-show');
Route::get('/cart/add/{product}','CartController@add')->name('cart-add');

Route::get('cart/delete/{product}','CartController@delete')->name('cart-delete');

Route::get('cart/trash','CartController@trash')->name('cart-trash');

Route::get('cart/update/{product}/{quantity?}','CartController@update')->name('cart-update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('order-detail','CartController@orderDetail')->name('order-detail');


/*Payoal*/
Route::get('payment', 'PaypalController@postPayment')->name('payment');
Route::get('payment/status', 'PaypalController@getPaymentStatus')->name('payment.status');


Route::resource('category', 'admin\CategoryController');
Route::get('/category/edit/{category}', 'admin\CategoryController@edit')->name('category.edit');
Route::put('/category/edit/{category}', 'admin\CategoryController@update')->name('category.update');
Route::delete('/category/destroy/{category}', 'admin\CategoryController@destroy')->name('category.destroy');


Route::get('admin/home', function () {
    return view('admin.home');
});

Route::resource('Aproduct', 'admin\ProductController');
Route::get('/Aproduct/edit/{product}', 'admin\ProductController@edit')->name('product.edit');
Route::put('/Aproduct/edit/{product}', 'admin\ProductController@update')->name('product.update');
Route::delete('/Aproduct/destroy/{product}', 'admin\ProductController@destroy')->name('product.destroy');

// User dependency injection
Route::bind('user', function($user){
    return App\User::find($user);
});
Route::resource('user', 'admin\UserController');
Route::get('/user/edit/{user}', 'admin\UserController@edit')->name('user.edit');
Route::put('/user/edit/{user}', 'admin\UserController@update')->name('user.update');
Route::delete('/user/destroy/{user}', 'admin\UserController@destroy')->name('user.destroy');



