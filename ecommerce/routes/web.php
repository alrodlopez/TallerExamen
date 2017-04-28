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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','MainController@home');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/home', 'HomeController@index')->name('home');


//PRODUCTS CRUD
Route::get('products','ProductsController@listall');
//Route::get('products\create','ProductsController@create');
//Route::get('products\update','ProductsController@update');
//Route::get('products\delete','ProductsController@delete');
//Route::get('products\show','ProductsController@show');

