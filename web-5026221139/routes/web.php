<?php

use Illuminate\Support\Facades\Route;

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
}) -> name('UTS');


Route::get('biodata', 'App\\Http\\Controllers\\DosenController@biodata');
/*blo etcetc*/
Route::get('blog', 'App\\Http\\Controllers\\DosenController@blog');
Route::get('blog/kontak', 'App\\Http\\Controllers\\DosenController@kontak');
Route::get('blog/about', 'App\\Http\\Controllers\\DosenController@tentang');


/*proes formulir */
Route::get('/formulir', 'App\\Http\\Controllers\\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\\Http\\Controllers\\PegawaiController@proses');




/*konvert tugas sebelumnya */
Route::get('/tugasI', 'App\\Http\\Controllers\\DosenController@Tugas1')-> name('Testi');
Route::get('/form', 'App\\Http\\Controllers\\DosenController@form')-> name('form');
Route::get('/hello', 'App\\Http\\Controllers\\DosenController@hello')-> name('hello');
Route::get('/responsive1', 'App\\Http\\Controllers\\DosenController@responsive1')-> name('responsive');
Route::get('/style', 'App\\Http\\Controllers\\DosenController@style')-> name('style');
Route::get('/style2', 'App\\Http\\Controllers\\DosenController@style2')-> name('style2');
Route::get('/templateinitiate', 'App\\Http\\Controllers\\DosenController@templateinitiate')-> name('templateinitiate');

/*konek*/
Route::get('/pegawai','App\\Http\\Controllers\\PegawaiDBController@index');
/*tambah */
Route::get('/pegawai/tambah','App\\Http\\Controllers\\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\\Http\\Controllers\\PegawaiDBController@store');
/*hapus*/
Route::get('/pegawai/hapus/{id}','App\\Http\\Controllers\\PegawaiDBController@hapus'); //dibuat nyantol {id} karena bukan requesst
/*edit */
Route::get('/pegawai/edit/{id}','App\\Http\\Controllers\\PegawaiDBController@edit');
Route::post('/pegawai/update','App\\Http\\Controllers\\PegawaiDBController@update');

/*searching*/

Route::get('/pegawai/cari','App\\Http\\Controllers\\PegawaiDBController@cari');


/*Tugas PR*/
Route::get('/lipstick','App\\Http\\Controllers\\LipstickDB@index');
/*hapus lipstick*/
Route::get('/lipstick/hapus/{kode}','App\\Http\\Controllers\\LipstickDB@hapus');
/*edit <lipsticky*/
Route::get('/lipstick/edit/{kode}','App\\Http\\Controllers\\LipstickDB@edit');
Route::post('/lipstick/update','App\\Http\\Controllers\\LipstickDB@update');
/*read detail*/
Route::get('/lipstick/detail/{kode}','App\\Http\\Controllers\\LipstickDB@detail');
/*tambah lipstick*/
Route::get('/lipstick/tambah','App\\Http\\Controllers\\LipstickDB@tambah');
Route::post('/lipstick/store','App\\Http\\Controllers\\LipstickDB@store');

Route::get('/lipstick/cari','App\\Http\\Controllers\\LipstickDB@cari');


