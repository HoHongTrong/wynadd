<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slide;

class SlideController extends Controller {
  public function getList() {
    $slide = Slide::all();
    return view('admin.slide.list', ['slide' => $slide]);
  }

//-------------------Add-------------------------
  public function getAdd() {

    return view('admin.slide.add');
  }

  public function postAdd(Request $request) {
    $this->validate($request, [
      'Ten' => 'required',
      'NoiDung' => 'required'
    ],
      [
        'Ten.required' => 'Nhập tên slide',
        'NoiDung.required' => 'Nhập nội dung',
      ]);
    $slide = new Slide();
    $slide->ten = $request->Ten;
    $slide->noidung = $request->NoiDung;
    if ($request->has('link')) {
      $slide->link = $request->link;
    }
    if ($request->hasFile('hinh')) {
      $file = $request->file('hinh');
      $duoi = $file->getClientOriginalExtension();
      if ($duoi !='jpg' && $duoi !='png' && $duoi !='gif' && $duoi !='tiff' && $duoi !='bmp') {
        return redirect('them-slide')->with('thongbao', 'ban chỉ được nhập jpg, png, gif, tiff, bmp');
      }
      $name = $file->getClientOriginalName();
      $Hinh = str_random(4) . "_" . $name;
      while (file_exists("upload/slide/" . $Hinh)) {
        $Hinh = str_random(4) . "_" . $name;
      }
      $file->move("upload/slide", $Hinh);
      $slide->hinh = $Hinh;
    }
    else {
      $slide->hinh = "";
    }
    $slide->save();
    return redirect('them-slide')->with('thongbao', 'Thêm slide thành công');

  }
  //------------------End Add-------------

  //-------------  Edit --------------------------
  public function getEdit($id) {
    $slide = Slide::find($id);
    return view('admin.slide.edit', ['slide' => $slide]);

  }

  public function postEdit(Request $request, $id) {
    $this->validate($request, [
      'Ten' => 'required',
      'NoiDung' => 'required'
    ],
      [
        'Ten.required' => 'Nhập tên slide',
        'NoiDung.required' => 'Nhập nội dung',
      ]);
    $slide = Slide::find($id);
    $slide->ten = $request->Ten;
    $slide->noidung = $request->NoiDung;
    if ($request->has('link')) {
      $slide->link = $request->link;
    }
    if ($request->hasFile('hinh')) {
      $file = $request->file('hinh');
      $duoi = $file->getClientOriginalExtension();
      if ($duoi !='jpg' && $duoi !='png' && $duoi !='gif' && $duoi !='tiff' && $duoi !='bmp') {
        return redirect('them-slide')->with('thongbao', 'ban chỉ được nhập jpg, png, gif, tiff, bmp');
      }
      $name = $file->getClientOriginalName();
      $Hinh = str_random(4) . "_" . $name;
      while (file_exists("upload/slide/" . $Hinh)) {
        $Hinh = str_random(4) . "_" . $name;
      }
      $file->move("upload/slide", $Hinh);
      unlink('upload/slide/'.$slide->hinh);
      $slide->hinh = $Hinh;
    }
    $slide->save();
    return redirect('sua-slide/'.$id)->with('thongbao', 'Sữa slide thành công');

  }
  //------------------End Edit----------------

//------------Delete-------------------
  public function getDelete($id) {
    $slide = Slide::find($id);
    $slide->delete();
    return redirect('danhsach-slide')->with('thongbao', 'xóa slide thành công');
  }
}
