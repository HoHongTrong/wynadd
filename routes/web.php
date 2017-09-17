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

Route::get('eee',function (){
  return view('admin.loaitin.add');
});