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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('welcome');


Route::group(['prefix'=> 'admin', 'middleware'=> 'auth', 'namespace'=> 'admin' ], function (){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

    /**
     * Slider route
     */
    Route::get('slider', 'SliderController@index')->name('slider.index');
    Route::get('slider/create', 'SliderController@create')->name('slider.create');
    Route::post('slider', 'SliderController@store')->name('slider.store');
    Route::get('slider/{id}/edit', 'SliderController@edit')->name('slider.edit');
    Route::put('slider/{id}', 'SliderController@update')->name('slider.update');
    Route::delete('slider/{id}', 'SliderController@destroy')->name('slider.delete');

    /**
     * Category route
     */
    Route::get('category', 'CategoryController@index')->name('category.index');
    Route::get('category/create', 'CategoryController@create')->name('category.create');
    Route::post('category', 'CategoryController@store')->name('category.store');
    Route::get('category/{id}/edit', 'CategoryController@edit')->name('category.edit');
    Route::put('category/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('category/{id}', 'CategoryController@destroy')->name('category.delete');
});