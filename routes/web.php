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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/001', 'UsersController@index');

/*
|product相關
|
*/
Route::get('/002',['as' => 'product.show', 'uses' => 'ProductsController@productIndex']);
Route::get('/003', ['as' => 'product.add','uses' =>'ProductsController@create']);

Route::get('/member', ['as' => 'member','uses' =>'UsersController@memberIndex']);

Route::post('product', ['as' => 'product.store', 'uses' => 'ProductsController@store']);
Route::get('product/{id}/edit', ['as' => 'product.edit'  , 'uses' => 'ProductsController@edit']);

Route::patch('product/{id}', ['as' => 'product.update'  , 'uses' => 'ProductsController@update']);
Route::delete('product/{id}', ['as' => 'product.destroy', 'uses' => 'ProductsController@destroy']);




/*
|order相關
|
*/
Route::get('/004', 'OrderController@create');
Route::get('/005',['as' => 'order.show', 'uses' => 'OrdersController@index']);
Route::get('product/{id}/buy', ['as' => 'product.buy'  , 'uses' => 'ProductsController@buy']);
Route::post('order', ['as' => 'order.store', 'uses' => 'OrdersController@store']);