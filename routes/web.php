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

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/')->group(function(){
    Route::get('/', 'PagesController@searchView');
    Route::get('/home', 'PagesController@homeView');
});

Route::prefix('/admin')->group(function(){
    Route::post('/create/delivery', 'DeliveryController@CreateDelivery');
    Route::get('/show/delivery', 'DeliveryController@ShowAllDelivery');
    Route::get('/edit/delivery/{id}', 'DeliveryController@EditDelivery');
    Route::post('/save/edited/delivery/{id}', 'DeliveryController@EditDeliverySave');
    Route::get('/generate/code', 'DeliveryController@CreateTrackingCode');
});

Route::prefix('/search')->group(function(){
    Route::get('/', 'DeliveryController@SearchOrder');
});