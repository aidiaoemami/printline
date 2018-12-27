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
});

Route::get('index', 'MasterController@index')->name('index');
Route::get('register', 'MasterController@register')->name('register')->middleware('guest');
Route::post('register', 'MasterController@postregister')->middleware('guest');
Route::get('login', 'MasterController@login')->middleware('guest')->name('login');
Route::post('login', 'MasterController@postlogin')->middleware('guest');;
Route::get('/logout', 'MasterController@logout')->name('logout');
Route::get('home', 'MasterController@home')->name('home');
Route::post('home', 'MasterController@home');
Route::get('toko', 'MasterController@toko')->name('toko');
Route::post('toko', 'MasterController@posttoko');
Route::get('tokosaya', 'MasterController@tokosaya')->name('tokosaya');
Route::post('tokosaya', 'MasterController@updatetoko');
Route::get('tambahlayanan', 'MasterController@tambahlayanan')->name('tambahlayanan');
Route::post('tambahlayanan', 'MasterController@posttambahlayanan');
Route::get('tambahlayananjilid', 'MasterController@tambahlayananjilid')->name('tambahlayananjilid');
Route::post('tambahlayananjilid', 'MasterController@posttambahlayananjilid');
// Route::post('/status/{$id}', 'MasterController@');
Route::get('editstatus/{id}', 'MasterController@editstatus')->name('editstatus');
Route::post('editstatus', 'MasterController@editstatus');
Route::get('pesan', 'MasterController@pesan');
Route::get('editaccount/{id}', 'MasterController@editaccount');
Route::post('editaccount', 'MasterController@posteditaccount');
Route::get('edittoko/{id}', 'MasterController@edittoko');
Route::post('edittoko', 'MasterController@postedittoko');
// Route::post('editaccount', 'MasterController@posteditaccount');