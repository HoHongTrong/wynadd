@extends('admin.layouts.master')
@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Sửa loại tin
            <small style="color: #b64c4c">{{$loaitin->ten}}</small>
          </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">

          @if(count($errors)>0)
            <div class="alert alert-danger">
              @foreach($errors->all() as $er)
                {{$er}}
              @endforeach
            </div>
          @endif

          @if(session('thongbao'))
            <div class="alert alert-success">
              {{session('thongbao')}}
            </div>
          @endif
          <form action="{{route('sua-loaitin',['id'=>$loaitin->id])}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="form-group">
              <label>Thể loại</label>
              <select class="form-control" name="TheLoai">
                @foreach($theloai as $thlo)
                  <option
                    @if($loaitin->idtheloai == $thlo->id)  {{--truyền đúng tên và id trước khi sữa--}}
                    {{"selected"}}
                    @endif
                    value="{{$thlo->id}}">{{$thlo->ten}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Tên loại tin</label>
              <input class="form-control" name="Ten" placeholder="Sữa tên loại tin" value="{{$loaitin->ten}}"/>
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