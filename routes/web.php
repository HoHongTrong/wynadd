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

Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);

Route::get('danhsach-theloai',['as'=>'ds-theloai','uses'=>'TheLoaiController@getList']);
Route::get('them-theloai',['as'=>'them-theloai','uses'=>'TheLoaiController@getAdd']);
Route::post('them-theloai',['as'=>'them-theloai','uses'=>'TheLoaiController@postAdd']);