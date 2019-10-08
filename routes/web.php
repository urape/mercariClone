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

Route::get('/', 'TopController@index');
Route::get('top', 'TopController@index');

Route::get('category', 'CategoryController@index');
Route::get('category/{category_id?}', 'CategoryController@show');

Route::get('item/{item_id}', 'ItemController@show');
Route::get('brand', function () {
    return view('brand');
});

Route::get('sell', function () {
    return view('sell');
});
