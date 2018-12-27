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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'users' => 'UserController',
    'orders' => 'OrderController'
]);

Route::get('/members', 'UserController@member')->name('users.member');
Route::get('index', 'MasterController@index')->name('index');
Route::get('toko', 'MasterController@toko')->name('toko');
Route::post('toko', 'MasterController@posttoko');
Route::get('tokosaya', 'MasterController@tokosaya')->name('tokosaya');
Route::post('tokosaya', 'MasterController@updatetoko');
Route::get('tambahlayanan', 'MasterController@tambahlayanan')->name('tambahlayanan');
Route::post('tambahlayanan', 'MasterController@posttambahlayanan');
Route::get('tambahlayananjilid', 'MasterController@tambahlayananjilid')->name('tambahlayananjilid');
Route::post('tambahlayananjilid', 'MasterController@posttambahlayananjilid');
