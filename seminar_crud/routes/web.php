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
    return view('welcome');
});

Auth::routes();
Route::get('/web', 'pesertaController@webDetail');
Route::get('/android', 'pesertaController@androidDetail');
Route::post('android', 'pesertaController@storeAndroid');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/PesertaAndroid', 'pesertaController@read');
Route::get('/PesertaWeb', 'pesertaController@read_web');
Route::put('/PesertaAndroid/update/{id}', 'pesertaController@updateAndroid');
Route::delete('/PesertaAndroid/{id}', 'pesertaController@destroy');

// files
Route::get('/files', 'FileController@index');
Route::get('/files/create', 'FileController@create');
Route::post('/files', 'FileController@store');
