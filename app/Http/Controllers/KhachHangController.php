<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;

class KhachHangController extends Controller
{
    public function getList(){
      $khachhang = KhachHang::all();
      return view('admin.khachhang.list',['khachhang'=>$khachhang]);
    }

    public function getAdd(){
      return view('admin.khachhang.add');
    }


  public function postAdd(Request $request) {
    $this->validate($request, [
      'Ten' => 'required',
      'TenCongTy' => 'required',
      'BinhLuan' => 'required'
    ],
      [
        'Ten.required' => 'Nhập tên slide',
        'TenCongTy.required' => 'Nhập tên công ty',
        'BinhLuan.required' => 'Nhập nội dung bình luận'
      ]);
    $khachhang = new KhachHang();
    $khachhang->ten = $request->Ten;
    $khachhang->chucvu = $request->ChucVu;
    $khachhang->binhluan = $request->BinhLuan;

    if ($request->hasFile('Hinh')) {
      $file = $request->file('Hinh');
      $duoi = $file->getClientOriginalExtension();
      if ($duoi !='jpg' && $duoi !='png' && $duoi !='gif' && $duoi !='tiff' && $duoi !='bmp') {
        return redirect('them-khachhang')->with('thongbao', 'ban chỉ được nhập jpg, png, gif, tiff, bmp');
      }
      $name = $file->getClientOriginalName();
      $Hinh = str_random(4) . "_" . $name;
      while (file_exists("upload/khachhang/" . $Hinh)) {
        $Hinh = str_random(4) . "_" . $name;
      }
      $file->move("upload/khachhang", $Hinh);
      $khachhang->Hinh = $Hinh;
    }
    else {
      $khachhang->Hinh = "";
    }
    $khachhang->save();
    return redirect('them-khachhang')->with('thongbao', 'Thêm khách hàng thành công');

  }
  //------------------End Add-------------

  public function getEdit($id) {
    $khachhang = KhachHang::find($id);
    return view('admin.khachhang.edit', ['khachhang' => $khachhang]);

  }

  public function postEdit(Request $request, $id) {
    $this->validate($request, [
      'Ten' => 'required',
      'TenCongTy' => 'required',
      'BinhLuan' => 'required'
    ],
      [
        'Ten.required' => 'Nhập tên slide',
        'TenCongTy.required' => 'Nhập tên công ty',
        'BinhLuan.required' => 'Nhập nội dung bình luận'
      ]);
    $khachhang = KhachHang::find($id);
    $khachhang->ten = $request->Ten;
    $khachhang->chucvu = $request->ChucVu;
    $khachhang->binhluan = $request->BinhLuan;

    if ($request->hasFile('Hinh')) {
      $file = $request->file('Hinh');
      $duoi = $file->getClientOriginalExtension();
      if ($duoi !='jpg' && $duoi !='png' && $duoi !='gif' && $duoi !='tiff' && $duoi !='bmp') {
        return redirect('them-slide')->with('thongbao', 'ban chỉ được nhập jpg, png, gif, tiff, bmp');
      }
      $name = $file->getClientOriginalName();
      $Hinh = str_random(4) . "_" . $name;
      while (file_exists("upload/khachhang/" . $Hinh)) {
        $Hinh = str_random(4) . "_" . $name;
      }
      $file->move("upload/khachhang", $Hinh);
      unlink('upload/khachhang/'.$khachhang->Hinh);
      $khachhang->Hinh = $Hinh;
    }
    $khachhang->save();
    return redirect('sua-khachhang/'.$id)->with('thongbao', 'Sữa khách hàng thành công');

  }
  //------------------End Edit----------------
}
