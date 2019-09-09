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

// Route::get('/', function () {
//     return view('auth.siswa');
// });


Auth::routes();

Route::group(['middleware'=>['auth','Role:admin']],function(){
Route::get('/admin', 'HomeController@index2');
});

Route::group(['middleware'=>['auth','Role:super_admin']],function(){
Route::get('/superadmin', 'HomeController@index3');
});

Route::group(['middleware'=>['auth','Role:siswa,admin,superadmin']],function(){
Route::get('/siswa', 'HomeController@index4');
});

Route::get('/', 'HomeController@index')->name('home');

