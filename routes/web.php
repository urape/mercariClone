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

Auth::routes();
Route::get('/', 'TopController@index');
Route::get('top', 'TopController@index')->name('top');

Route::get('category', 'CategoryController@index')->name('categories');
Route::get('category/{category_id?}', 'CategoryController@show')->name('category');

Route::get('item/{item_id}', 'ItemController@show')->name('item');
Route::get('brand', function () {
    return view('brand');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('mypage', 'MyPageController@index')->name('mypage');
    Route::get('mypage/email_password', 'MyPageController@email_password')->name('email_password');
    Route::get('sell', 'SellController@index')->name('sell');
    Route::post('sell/create', 'SellController@create')->name('sell.create');
    Route::get('buy/{item_id}', 'BuyController@show')->name('buy');
    Route::post('buy/update/{id}', 'BuyController@update')->name('buy.update');
    Route::post('item/update/{id}', 'BuyController@update')->name('item.update');
    Route::post('item/delete/{id}', 'BuyController@delete')->name('item.delete');
});
