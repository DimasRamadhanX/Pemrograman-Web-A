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
});


Route::get('biodata', 'App\\Http\\Controllers\\DosenController@biodata');
/*blo etcetc*/
Route::get('blog', 'App\\Http\\Controllers\\DosenController@blog');
Route::get('blog/kontak', 'App\\Http\\Controllers\\DosenController@kontak');
Route::get('blog/about', 'App\\Http\\Controllers\\DosenController@tentang');


/*proes formulir */
Route::get('/formulir', 'App\\Http\\Controllers\\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\\Http\\Controllers\\PegawaiController@proses');





