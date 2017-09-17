<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
  protected $table = 'tintucs';

  public function loaitin(){
    return $this->belongsTo('App\LoaiTin','idloaitin','id');
  }

  public function comment(){
    return $this->hasMany('App\Comment','idtintuc','id');
  }
}
