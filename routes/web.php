<?php


Route::get('admin/login','AdminController@getLoginAdmin');
Route::post('admin/login','AdminController@postloginAdmin');
Route::get('admin/logout','AdminController@getlogoutAdmin');


Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function () {
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

//============================== Admin===============================================
  Route::get('danhsach-admin',['as'=>'ds-admin','uses'=>'AdminController@getList']);

  Route::get('them-admin',['as'=>'them-admin','uses'=>'AdminController@getAdd']);
  Route::post('them-admin',['as'=>'them-admin','uses'=>'AdminController@postAdd']);

  Route::get('sua-admin/{id}',['as'=>'sua-admin','uses'=>'AdminController@getEdit']);
  Route::post('sua-admin/{id}',['as'=>'sua-admin','uses'=>'AdminController@postEdit']);

  Route::get('xoa-admin/{id}',['as'=>'xoa-admin','uses'=>'AdminController@getDelete']);

});

//=============================== Fronend =====================================================
//============================================================================================
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


