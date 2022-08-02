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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontendController@index')->name('home');
Route::get('/product', 'ProductController@index')->name('home');
Route::post('/product/insert', 'ProductController@product_insert')->name('home');
Route::get('/product/edit/{id}', 'ProductController@product_edit')->name('home');
Route::post('/product/update', 'ProductController@product_update')->name('home');
Route::post('/product/delete/{id}', 'ProductController@product_delete')->name('home');
