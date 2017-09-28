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

//============================== Slide===============================================
Route::get('danhsach-slide',['as'=>'ds-slide','uses'=>'SlideController@getList']);

Route::get('them-slide',['as'=>'them-slide','uses'=>'SlideController@getAdd']);
Route::post('them-slide',['as'=>'them-slide','uses'=>'SlideController@postAdd']);

Route::get('sua-slide/{id}',['as'=>'sua-slide','uses'=>'SlideController@getEdit']);
Route::post('sua-slide/{id}',['as'=>'sua-slide','uses'=>'SlideController@postEdit']);

Route::get('xoa-slide/{id}',['as'=>'xoa-slide','uses'=>'SlideController@getDelete']);
//============================== Khách hàng===============================================
Route::get('danhsach-khachhang',['as'=>'ds-khachhang','uses'=>'KhachHangController@getList']);

Route::get('them-khachhang',['as'=>'them-khachhang','uses'=>'KhachHangController@getAdd']);
Route::post('them-khachhang',['as'=>'them-khachhang','uses'=>'KhachHangController@postAdd']);

Route::get('sua-khachhang/{id}',['as'=>'sua-khachhang','uses'=>'KhachHangController@getEdit']);
Route::post('sua-khachhang/{id}',['as'=>'sua-khachhang','uses'=>'KhachHangController@postEdit']);

Route::get('xoa-khachhang/{id}',['as'=>'xoa-khachhang','uses'=>'KhachHangController@getDelete']);

//=============================== Fronend =====================================================
Route::get('trangchu',['as'=>'trangchu','uses'=>'PagesController@trangchu']);
Route::get('lienhe',['as'=>'lienhe','uses'=>'PagesController@lienhe']);
Route::get('gioithieu',['as'=>'gioithieu','uses'=>'PagesController@gioithieu']);
Route::get('dichvu',['as'=>'dichvu','uses'=>'PagesController@dichvu']);

Route::get('tintuc/{id}/{tenkhongdau}',['as'=>'tintuc','uses'=>'PagesController@tintuc']);

Route::get('logo-phong-thuy',function (){
  return view('pages.detail.logophongthuy');
});
Route::get('giai-phap-thuong-hieu',function (){
  return view('pages.detail.giaiphapthuonghieu');
});
Route::get('dang-ki-bao-ho-doc-quyen',function (){
  return view('pages.detail.dkbaoho');
});
Route::get('video-intro',function (){
  return view('pages.detail.videointro');
});
Route::get('video-2d-3d',function (){
  return view('pages.detail.2d3d');
});


