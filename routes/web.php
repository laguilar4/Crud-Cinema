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
       return view('index');
     });
Route::get('/inicio', 'PeliculaController@index')->name('inicio');
Route::get('/agregarpeliculas', 'PeliculaController@agregarpeli')->name('agregarpeliculas');
Route::get('/listaspeli', 'PeliculaController@listaspeli')->name('listaspeli');
Route::post('/store', 'PeliculaController@store')->name('store');
Route::get('/editar/{id}', 'PeliculaController@edit')->name('editar');
Route::put('/update/{id}', 'PeliculaController@update')->name('update');
Route::delete('/destroy/{id}', 'PeliculaController@destroy')->name('eliminar');
Route::get('/genero', 'GeneroController@index')->name('genero');
Route::post('/store2', 'GeneroController@store')->name('store2');