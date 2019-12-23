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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::resource('products', 'ProductController');

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Auth::routes(['verify' => true]);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::res    ource('clients','ClientController')->middleware('verified');

Route::get('/','ClientController@create')->name('clients.create');
Route::post('/','ClientController@store')->name('clients.store');
Route::get('/clients','ClientController@index')->name('clients.index')->middleware(['verified']);
Route::delete('/{client}','ClientController@destroy')->name('clients.destroy')->middleware(['verified']);
//Auth::routes();
//Route::resource('clients', 'ClientController');

Route::get('export', 'ClientController@export')->name('export');
Route::post('import', 'ClientController@import')->name('import');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
