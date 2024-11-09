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
Route::get('/tugasI', 'App\\Http\\Controllers\\DosenController@Tugas1');
Route::get('/form', 'App\\Http\\Controllers\\DosenController@form');
Route::get('/hello', 'App\\Http\\Controllers\\DosenController@hello');
Route::get('/responsive1', 'App\\Http\\Controllers\\DosenController@responsive1');
Route::get('/style', 'App\\Http\\Controllers\\DosenController@style');
Route::get('/style2', 'App\\Http\\Controllers\\DosenController@style2');
