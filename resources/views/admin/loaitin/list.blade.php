@extends('admin.layouts.master')
@section('content')

  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Loại Tin
            <small style="color: #2A3542">danh sách</small>
          </h1>
        </div>
        <!-- /.col-lg-12 -->
        @if(session('thongbao'))
          <div class="alert alert-success">
            {{session('thongbao')}}
          </div>
        @endif
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
          <tr align="center">
            <th>ID</th>
            <th>Tên</th>
            <th>Tên không dấu</th>
            <th>Thể loại</th>
            <th>Delete</th>
            <th>Edit</th>
          </tr>
          </thead>
          <tbody>
          @foreach($loaitin as $lt)
            <tr class="odd gradeX" align="center">
              <td>{{$lt->id}}</td>
              <td>{{$lt->ten}}</td>
              <td>{{$lt->tenkhongdau}}</td>
              <td>{{$lt->TheLoai->ten}}</td>
              <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoa-loaitin',['id' => $lt->id])}}">
                  Delete</a></td>
              <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                  href="{{route('sua-loaitin',['id' => $lt->id])}}">Edit</a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->

@endsection