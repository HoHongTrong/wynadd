@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Quản trị
          <small style="color: #2A3542">Thêm</small>
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

        <form action="{{route('them-admin')}}" method="POST" >
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          <div class="form-group">
            <label>Tên:</label>
            <input class="form-control" name="name" placeholder="Nhập tên người quản trị"/>
          </div>
          <div class="form-group">
            <label>Email :</label>
            <input type="email" class="form-control" name="email" placeholder="Nhập email"/>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu"/>
          </div>
          <div class="form-group">
            <label>Nhập lại password</label>
            <input type="password" class="form-control" name="passwordAgain" placeholder="Nhập lại mật khẩu"/>
          </div>

          <button type="submit" class="btn btn-default">Thêm Người quản trị</button>
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