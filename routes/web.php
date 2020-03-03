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
    return view('home');
})->name('inicio');
Route::get('/saludo/{name}/{nickname?}','WelcomeController');
Route::get('/usuarios', 'UserController@index')->name('users');
Route::get('/usuarios/nuevo','UserController@create')->name('new_user');
Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+')->name('detalle_user');
Route::get('/usuarios/{id}/edit', 'UserController@edit')->where('id', '[0-9]+');


// PASTELES ----------------------------------------------------------------
Route::get('/pasteles', 'PastelController@index')->name('todos_pasteles');
Route::get('/pasteles/{id}', 'PastelController@show')->where('id', '[0-9 ]+')->name('detalle_pastel');
Route::get('/pasteles/new', 'PastelController@new')->name('pastel_nuevo');
Route::post('/pasteles/store', 'PastelController@store');