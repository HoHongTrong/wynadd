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

//============================= thể loại================================================
  Route::get('danhsach-theloai',['as'=>'ds-theloai','uses'=>'TheLoaiController@getList']);

  Route::get('them-theloai',['as'=>'them-theloai','uses'=>'TheLoaiController@getAdd']);
  Route::post('them-theloai',['as'=>'them-theloai','uses'=>'TheLoaiController@postAdd']);

  Route::get('sua-theloai/{id}',['as'=>'sua-theloai','uses'=>'TheLoaiController@getEdit']);
  Route::post('sua-theloai/{id}',['as'=>'sua-theloai','uses'=>'TheLoaiController@postEdit']);

  Route::get('xoa-theloai/{id}',['as'=>'xoa-theloai','uses'=>'TheLoaiController@getDelete']);

//============================== loại tin===============================================
  Route::get('danhsach-loaitin',['as'=>'ds-loaitin','uses'=>'LoaiTinController@getList']);

  Route::get('them-loaitin',['as'=>'them-loaitin','uses'=>'LoaiTinController@getAdd']);
  Route::post('them-loaitin',['as'=>'them-loaitin','uses'=>'LoaiTinController@postAdd']);

  Route::get('sua-loaitin/{id}',['as'=>'sua-loaitin','uses'=>'LoaiTinController@getEdit']);
  Route::post('sua-loaitin/{id}',['as'=>'sua-loaitin','uses'=>'LoaiTinController@postEdit']);

  Route::get('xoa-loaitin/{id}',['as'=>'xoa-loaitin','uses'=>'LoaiTinController@getDelete']);

//============================== tin tức===============================================
Route::get('danhsach-tintuc',['as'=>'ds-tintuc','uses'=>'TinTucController@getList']);

Route::get('them-tintuc',['as'=>'them-tintuc','uses'=>'TinTucController@getAdd']);
Route::post('them-tintuc',['as'=>'them-tintuc','uses'=>'TinTucController@postAdd']);

Route::get('sua-tintuc/{id}',['as'=>'sua-tintuc','uses'=>'TinTucController@getEdit']);
Route::post('sua-tintuc/{id}',['as'=>'sua-tintuc','uses'=>'TinTucController@postEdit']);

Route::get('xoa-tintuc/{id}',['as'=>'xoa-tintuc','uses'=>'TinTucController@getDelete']);
