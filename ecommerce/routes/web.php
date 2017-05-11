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
<<<<<<< HEAD

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::resource('users','UsersController');
Route::resource('panelcontrol','CpController');
>>>>>>> d11a3e8acf132610ee07c4deee52978198462067
