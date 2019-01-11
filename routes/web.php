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
Route::get('/002',['as' => 'product.show', 'uses' => 'ProductsController@productIndex']);
Route::get('/003', 'ProductsController@create');

Route::post('product', ['as' => 'product.store', 'uses' => 'ProductsController@store']);
Route::get('product/{id}/edit', ['as' => 'product.edit'  , 'uses' => 'ProductsController@edit']);

Route::patch('product/{id}', ['as' => 'product.update'  , 'uses' => 'ProductsController@update']);
Route::delete('product/{id}', ['as' => 'product.destroy', 'uses' => 'ProductsController@destroy']);
