<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TheLoai;
use App\LoaiTin;

class AjaxController extends Controller
{
  /*lấy idTheLoai từ route*/
    public function getAjaxLoaiTin($idtheloai){
      $loaitin = LoaiTin::where('idtheloai',$idtheloai)->get();
      foreach ($loaitin as $lt){
        echo "<option value='".$lt->id."'>".$lt->ten."</option>";
      }
    }
}
