<?php

namespace App\Http\Controllers;

use App\LoaiTin;
use App\TheLoai;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\TinTuc;
use App\Comment;

class TinTucController extends Controller {

  public function getList() {
    $tintuc = TinTuc::orderBy('id', 'DESC')->get();
    return view('admin.tintuc.list', ['tintuc' => $tintuc]);
  }
//-------------------Add-------------------------
  public function getAdd() {
    return view('admin.tintuc.add');
  }
  public function postAdd(Request $request) {
    $this->validate($request,
      [

        'TieuDe' => 'required|min:3|unique:tintucs,tieude',
        'TomTat' =>'required',
        'NoiDung' =>'required',
      ],
      [
        'TieuDe.required' => 'Bạn chưa nhập tiêu đề',
        'TieuDe.min' => 'Độ dài ít nhất 3 ký tự',
        'TieuDe.unique' => 'Trùng tiêu đề',
        'TomTat.required' => 'Bạn chưa nhập tóm tắt',
        'NoiDung.required' => 'Bạn chưa nhập nội dung'
      ]);
    $tintuc = new TinTuc();
    $tintuc->tieude = $request->TieuDe;
    $tintuc->tieudekhongdau = changeTitle($request->TieuDe);
    $tintuc->tomtat = $request->TomTat;
    $tintuc->noidung = $request->NoiDung;
    $tintuc->soluotxem = 0;
    if ($request->hasFile('Hinh')) {
      $file = $request->file('Hinh');
      $duoi = $file->getClientOriginalExtension();
      if ($duoi !='jpg' && $duoi !='png' && $duoi != 'gif' && $duoi != 'jpeg' )
      {
        return redirect('admin/them-tintuc')->with('thongbao', 'ban chỉ được nhập hình jpg,png,gif,jpeg');
      }
      $name = $file->getClientOriginalName();
      $Hinh = str_random(4) . "_" . $name;
      while (file_exists("upload/tintuc/" . $Hinh)) {
        $Hinh = str_random(4) . "_" . $name;
      }
      $file->move("upload/tintuc", $Hinh);
      $tintuc->Hinh = $Hinh;
    }
    else {
      $tintuc->Hinh = "";
    }
    $tintuc->save();

    return redirect('admin/them-tintuc')->with('thongbao', 'thêm tin tức thành công');
  }
  //------------------End Add-------------

  //-------------Edit-------------------------------------
  public function getEdit($id) {
    $theloai = TheLoai::all();
    $loaitin = LoaiTin::all();
    $tintuc = TinTuc::find($id);
    Return view('admin.tintuc.edit', ['tintuc' => $tintuc,'theloai'=>$theloai,'loaitin'=>$loaitin]);
  }

  public function postEdit(Request $request, $id) {
    $tintuc = TinTuc::find($id);
    $this->validate($request,
      [
        'TieuDe' => 'required|min:3',/*unique:TinTuc,TieuDe tên bảng,trường*/
        'TomTat' =>'required',
        'NoiDung' =>'required',
      ],
      [
        'TieuDe.required' => 'Bạn chưa nhập tiêu đề',
        'TieuDe.min' => 'Độ dài ít nhất 3 ký tự',
        'TomTat.required' => 'Bạn chưa nhập tóm tắt',
        'NoiDung.required' => 'Bạn chưa nhập nội dung'
      ]);
    $tintuc->tieude = $request->TieuDe;
    $tintuc->tieudekhongdau = changeTitle($request->TieuDe);
    $tintuc->tomtat = $request->TomTat;
    $tintuc->noidung = $request->NoiDung;
    if ($request->hasFile('Hinh')) {
      $file = $request->file('Hinh');
      $duoi = $file->getClientOriginalExtension();
      if ($duoi !='jpg' && $duoi !='png' && $duoi !='gif' && $duoi !='tiff' && $duoi !='bmp')
      {
        return redirect('admin/sua-tintuc')->with('thongbao', 'ban chỉ được nhập jpg, png, gif, tiff, bmp');
      }
      $name = $file->getClientOriginalName();
      $Hinh = str_random(4) . "_" . $name;
      while (file_exists("upload/tintuc/" . $Hinh)) {
        $Hinh = str_random(4) . "_" . $name;
      }
      $file->move("upload/tintuc", $Hinh);
      @unlink('upload/tintuc/'.$tintuc->Hinh);
      $tintuc->Hinh = $Hinh;
    }
    $tintuc->save();
    return redirect('admin/sua-tintuc/'.$id)->with('thongbao', 'sữa tin tức thành công');
  }
  //------------------End Edit----------------

//------------Delete-------------------
  public function getDelete($id) {
    $tintuc = TinTuc::find($id);
    $tintuc->delete();
    return redirect('admin/danhsach-tintuc')->with('thongbao', 'xóa tin tức thành công');
  }
}
