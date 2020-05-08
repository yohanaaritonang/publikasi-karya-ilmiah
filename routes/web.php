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

Route::get('/homecivitas', 'HomeController@home');
Route::get('/civitaseditprofile', 'CivitasController@civitaseditprofile');
Route::get('/civitasprofile', 'CivitasController@civitasprofile');

Route::get('/homeadmin', 'HomeControllerA@home');

Route::get('/karyailmiah' , 'KaryailmiahController@index');
