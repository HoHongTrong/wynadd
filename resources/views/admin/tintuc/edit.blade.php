@extends('admin.layouts.master')
@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Tin Tức
            <small style="color: #b64c4c">{{$tintuc->tieude}}</small>
          </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">

          @if(count($errors)>0)
            <div class="alert alert-danger">
              @foreach($errors->all() as $err)
                {{$err}}<br/>
              @endforeach
            </div>
          @endif

          @if(session('thongbao'))
            <div class="alert alert-success">
              {{session('thongbao')}}
            </div>
          @endif

          {{-- enctype="multipart/form-data" dùng để upload hình lên --}}
          <form action="{{route('sua-tintuc',['id'=>$tintuc->id])}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="form-group">
              <label>Thể loại :</label>
              <select class="form-control" name="TheLoai" id="TheLoai">
                @foreach($theloai as $tl)
                  <option
                    @if($tintuc->LoaiTin->TheLoai->id ==$tl->id)
                    {{"selected"}}
                    @endif
                    value="{{$tl->id}}">{{$tl->ten}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Loại tin :</label>
              <select class="form-control" name="LoaiTin" id="LoaiTin">
                @foreach($loaitin as $lti)
                  <option
                    @if($tintuc->LoaiTin->id ==$tl->id)
                    {{"selected"}}
                    @endif
                    value="{{$lti->id}}">{{$lti->ten}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Tiêu đề :</label>
              <input class="form-control" name="TieuDe" placeholder="Nhập tiêu đề" value="{{$tintuc->tieude}}"/>
            </div>
            <div class="form-group">
              <label>Tóm Tắt</label>
              <textarea id="demo" name="TomTat" class="form-control ckeditor" rows="2">
                {{$tintuc->tomtat}}
              </textarea>
            </div>

            <div class="form-group">
              <label>Nội Dung</label>
              <textarea id="demo" name="NoiDung" class="form-control ckeditor" rows="5">
                {{$tintuc->noidung}}
              </textarea>
            </div>

            <div class="form-group">
              <label>Hình Ảnh</label>
              <p>
                <img width="400px" src="{{ asset("/upload/tintuc/$tintuc->Hinh") }}"/>
              </p>
              <input type="file" name="Hinh"/>

            </div>
            <div class="form-group">
              <label>Nổi Bật</label>
              <label class="radio-inline">
                <input name="NoiBat" value="0"
                       @if($tintuc->noibat == 0)
                       {{"checked"}}
                       @endif
                       type="radio">Không
              </label>
              <label class="radio-inline">
                <input name="NoiBat" value="1"
                       @if($tintuc->noibat == 0)
                       {{"checked"}}
                       @endif type="radio">Có
              </label>
            </div>

            <button type="submit" class="btn btn-default">Edit</button>
            <button type="reset" class="btn btn-default">Reset</button>
          </form>
        </div>
      </div>
      </div>
    </div>
@endsection
@section('script')
  <script>
    $(document).ready(function () {
      $("#TheLoai").change(function () {  /*lấy ra id của thể loại*/
        var idTheLoai = $(this).val();
        $.get("admin/ajax/loaitin/" + idTheLoai, function (data) { /*gọi trang ajax và nối id thể loại*/
          $("#LoaiTin").html(data);
          /*truyền dữ liệu sang loại tin*/
        })
      });
    })
  </script>
@endsection