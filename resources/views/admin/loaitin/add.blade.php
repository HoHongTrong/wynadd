@extends('admin.layouts.master')

@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Loại tin
            <small style="color: #2A3542">thêm</small>
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

          <form action="{{route('them-loaitin')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

            <div class="form-group">
              <label>Thể Loại</label>
              <select class="form-control" name="TheLoai">
                @foreach($theloai as $thl)
                  <option value="{{$thl->id}}">{{$thl->ten}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Tên loại tin</label>
              <input class="form-control" name="Ten" placeholder="Nhập tên loại tin"/>
            </div>
            <button type="submit" class="btn btn-default">Thêm</button>
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
