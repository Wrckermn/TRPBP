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

//Rute Login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rute Sistem Admin
Route::get('/admin', 'AdminController@index');
Route::get('/list', 'AdminController@list');
Route::get('/tambah', 'AdminController@tambah');
Route::post('/simpan', 'AdminController@simpan');
Route::get('/edit/{id}', 'AdminController@edit');
Route::get('/hapus/{id}','AdminController@hapus');
Route::post('/updet', 'AdminController@updet');

Route::get('/daftar', 'AdminController@daftar');
Route::get('/tamdaf', 'AdminController@tamdaf');
Route::post('/simpandaf', 'AdminController@simpandaf');
Route::get('/editdaf/{id}', 'AdminController@editdaf');
Route::get('/hapusdaf/{id}','AdminController@hapusdaf');
Route::post('/updetdaf', 'AdminController@updetdaf');

Route::get('/user', 'UserController@user');
Route::get('/kategori/{kategori}', 'UserController@kategori');
