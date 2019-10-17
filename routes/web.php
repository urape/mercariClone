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
    Route::get('mypage/exhibiting', 'MyPageController@exhibiting')->name('exhibiting');
    Route::get('mypage/progress', 'MyPageController@progress')->name('progress');
    Route::get('mypage/completed', 'MyPageController@completed')->name('completed');
    Route::get('mypage/purchase', 'MyPageController@purchase')->name('purchase');
    Route::get('mypage/purchased', 'MyPageController@purchased')->name('purchased');
    Route::get('sell', 'SellController@index')->name('sell');
    Route::post('sell/create', 'SellController@create')->name('sell.create');
    Route::get('buy/{item_id}', 'BuyController@show')->name('buy');
    Route::post('buy/update/{id}', 'BuyController@update')->name('buy.update');
    Route::get('sell/edit/{item_id}', 'SellController@edit')->name('sell.edit');
    Route::post('sell/update/{item_id}', 'SellController@update')->name('sell.update');
    Route::post('item/delete', 'ItemController@delete')->name('item.delete');
});
