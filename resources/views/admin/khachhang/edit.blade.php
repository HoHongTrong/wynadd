@extends('admin.layouts.master')
@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Slide
            <small style="color: #b64c4c">{{$khachhang->ten}}</small>
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
          <form action="{{route('sua-khachhang',['id'=>$khachhang->id])}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="form-group">
              <label>Tên:</label>
              <input class="form-control" name="Ten" placeholder="Nhập tên khách hàng" value="{{$khachhang->ten}}"/>
            </div>
            <div class="form-group">
              <label>Chức Vụ:</label>
              <input class="form-control" name="ChucVu" placeholder="Chức vụ tên cty" value="{{$khachhang->chucvu}}"/>
            </div>
            <div class="form-group">
              <label>Bình Luận</label>
              <textarea id="demo" name="BinhLuan" class="form-control ckeditor" rows="5"
                        value="{{$khachhang->binhluan}}"></textarea>
            </div>

            <div class="form-group">
              <label>Hình Ảnh</label>
              <p><img src="{{ asset("/upload/khachhang/$khachhang->Hinh") }}"/></p>
              <input type="file" name="Hinh"/>
            </div>

            <button type="submit" class="btn btn-default">Sửa</button>
            <button type="reset" class="btn btn-default">Reset</button>
          </form>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->

@endsection