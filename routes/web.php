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
    return view('examen');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('solodia', function () {
    return view('permitido');
});

Route::get('alumnos', 'AlumnosController@index')->name('alumnos');
Route::get('foto', 'FotoController@index')->name('foto');
Route::post('foto', 'FotoController@create')->name('imagen');
Route::get('api', 'ApiController@index')->name('api');


