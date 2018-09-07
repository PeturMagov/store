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
Route::get('/products', [
	'uses' => 'ProductsController@index',
	'as' => 'products'
]);
Route::get('/products/new', [
	'uses' => 'ProductsController@create',
	'as' => 'products.new'
]);
Route::post('/products', [
	'uses' => 'ProductsController@store',
	'as' => 'products'
]);
Route::get('/products/edit/{id}', [
	'uses' => 'ProductsController@edit',
	'as' => 'products.edit'
]);
Route::post('/products/{id}', [
	'uses' => 'ProductsController@update',
	'as' => 'products.update'
]);
Route::get('/products/{id}', [
	'uses' => 'ProductsController@destroy',
	'as' => 'products.delete'
]);
Route::get('/product/{id}', [
	'uses' => 'ProductsController@show',
	'as' => 'product.show'
]);
Route::get('/brands', [
	'uses' => 'BrandsController@index',
	'as' => 'brands'
]);
Route::get('/brands/new', [
	'uses' => 'BrandsController@create',
	'as' => 'brands.new'
]);
Route::post('/brands', [
	'uses' => 'BrandsController@store',
	'as' => 'brands'
]);
Route::get('/brands/edit/{id}', [
	'uses' => 'BrandsController@edit',
	'as' => 'brands.edit'
]);
Route::post('/brands/{id}', [
	'uses' => 'BrandsController@update',
	'as' => 'brands.update'
]);
Route::get('/brands/{id}', [
	'uses' => 'BrandsController@destroy',
	'as' => 'brands.delete'
]);
Route::get('/brand/{id}', [
	'uses' => 'BrandsController@show',
	'as' => 'brand.show'
]);