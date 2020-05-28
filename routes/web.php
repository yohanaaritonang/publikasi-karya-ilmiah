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
Route::get('/civitaskaryailmiah', 'CivitasController@civitaskaryailmiah');
Route::get('/civitaspenulis', 'CivitasController@civitaspenulis');
Route::get('/civitastentang', 'CivitasController@civitastentang');
Route::get('/civitasprodi', 'CivitasController@civitasprodi');

Route::get('/Tentang','TentangController@About');
Route::get('/karyailmiah' , 'KaryailmiahController@index');
Route::get('/penulis' , 'PenulisController@index');
Route::post('/proses_login', 'AutentikasiController@login');
Route::get('/prodi' , 'ProdiController@prodi');
Route::get('/viewprodi' , 'ViewProdiController@viewprodi');
Route::get('/civitasrequest' , 'CivitasController@civitasrequest');
Route::get('/login', function () {
    return view('login');
});

Route::get('/Publikasi' , 'PublikasiController@index')->name('Publikasi.index');
Route::get('/tambah' , 'PublikasiController@create')->name('Publikasi.create');
Route::PUT('/store' , 'PublikasiController@store')->name('Publikasi.store');

Route::get('/FormAddKaryaAdmin', 'CivitasController1@index');
Route::post('/upload/proses','CivitasController1@UploadFiles');

Route::get('/homeadmin', 'HomeController@homeadmin');
Route::get('/admin/koleksi' , 'AdminController@adminkoleksi');
Route::get('/admin/tentang' , 'AdminController@admintentang');
Route::get('/admin/prodi' , 'AdminController@adminprodi');
Route::get('/admin/penulis', 'AdminController@adminpenulis');
Route::get('/rejected','AdminController@getAllReject');
Route::get('/files/reject','AdminController@reject');
Route::get('/files/publish','AdminController@publish');

Route::get('/sisteminformasi', 'AdminController@sisteminformasi')->name('adminprodi.sisteminformasi');
Route::get('/informatika', 'AdminController@informatika')->name('adminprodi.informatika');
Route::get('/teknologikomputer', 'AdminController@teknologikomputer')->name('adminprodi.teknologikomputer');
Route::get('/teknikelektro', 'AdminController@teknikelektro')->name('adminprodi.teknikelektro');
Route::get('/trpl', 'AdminController@trpl')->name('adminprodi.trpl');
Route::get('/teknologiinformasi', 'AdminController@teknologiinformasi')->name('adminprodi.teknologiinformasi');
Route::get('/manajemenrekayasa', 'AdminController@manajemenrekayasa')->name('adminprodi.manajemenrekayasa');
Route::get('/teknikbioproses', 'AdminController@teknikbioproses')->name('adminprodi.teknikbioproses');