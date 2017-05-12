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
Route::resource('products','ProductsController');

Route::get('/home', 'HomeController@index');


Route::get('/home', 'HomeController@index')->name('home');


//PRODUCTS CRUD
//Route::get('products','ProductsController@listAll');
//Route::post('products\create','ProductsController@create');
//Route::get('products\update','ProductsController@update');
//Route::get('products\delete','ProductsController@delete');
//Route::get('products\show','ProductsController@show');
Route::resource('products','ProductsController');
//Providers crud
//Route::get('providers','ProvidersController@listado');
//Route::any('providers/create','ProvidersController@create',
  //  array('as'=>'create.post','uses'=>'ProvidersController@create'));
//Route::get('providers/update','ProvidersController@update');
//Route::get('providers/delete','ProvidersController@delete');
//Route::get('providers/show','ProvidersController@show');
Route::resource('providers','ProvidersController');
//Product Types crud
//Route::get('product_types','ProvidersController@listado');
//Route::any('product_types/create','ProductTypesController@create',
//  array('as'=>'create.post','uses'=>'ProductTypesController@create'));
//Route::get('product_types/update','ProductTypesController@update');
//Route::get('product_types/delete','ProductTypesController@delete');
//Route::get('product_types/show','ProductTypesController@show');
Route::resource('product_types','ProductTypesController');
Route::resource('providers','ProvidersController');
Route::resource('users','UsersController');
Route::resource('panelcontrol','CpController');
Route::resource('promotions','PromotionsController');