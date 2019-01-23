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
Route::get('/MemberProduct',['as' => 'product.show', 'uses' => 'ProductsController@productIndex']);
Route::get('/ProductCreate', ['as' => 'product.add','uses' =>'ProductsController@create']);

Route::get('/Member', ['as' => 'member','uses' =>'UsersController@memberIndex']);

Route::post('product', ['as' => 'product.store', 'uses' => 'ProductsController@store']);
Route::get('product/{id}/edit', ['as' => 'product.edit'  , 'uses' => 'ProductsController@edit']);

Route::patch('product/{id}', ['as' => 'product.update'  , 'uses' => 'ProductsController@update']);
Route::delete('product/{id}', ['as' => 'product.destroy', 'uses' => 'ProductsController@destroy']);

Route::get('/Product',['as' => 'product.all', 'uses' => 'ProductsController@all']);


/*
|order相關
|
*/
Route::get('/004', 'OrderController@create');
Route::get('/MemberOrder',['as' => 'order.show', 'uses' => 'OrdersController@index']);
Route::get('product/{id}/buy', ['as' => 'product.buy'  , 'uses' => 'ProductsController@buy']);
Route::post('order', ['as' => 'order.store', 'uses' => 'OrdersController@store']);


//搜尋
Route::get('/search', ['as' => 'product.search'  , 'uses' => 'ProductsController@search']);
Route::get('/search2', ['as' => 'product.search2'  , 'uses' => 'ProductsController@search2']);


Route::get('/class', ['as' => 'product.class'  , 'uses' => 'ProductsController@class']);
Route::get('/class2', ['as' => 'product.class2'  , 'uses' => 'ProductsController@class2']);

