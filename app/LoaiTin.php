<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
  protected $table = 'loaitins';
  public  $timestamps = false;

  public function theloai(){
    return $this->belongsTo('App\TheLoai','idtheloai','id');
  }

  public function tintuc(){
    return $this->hasMany('App\TinTuc','idloaitin','id');
  }

}
