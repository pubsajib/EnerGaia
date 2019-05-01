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
	if (!auth()->user()) return view('welcome');
	else return redirect()->route('home');
});

Auth::routes();
Route::resource('products','ProductController');
Route::get('quantity','ProductController@quantityCreate')->name('quantity.create');
Route::post('quantity','ProductController@quantityStore')->name('quantity.store');
Route::get('/home', 'HomeController@index')->name('home');
