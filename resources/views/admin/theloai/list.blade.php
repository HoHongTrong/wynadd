@extends('admin.layouts.master')
@section('content')

  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Thể Loại
            <small style="color: #2A3542">Danh Sách</small>
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
            <th>Delete</th>
            <th>Edit</th>
          </tr>
          </thead>
          <tbody>
          @foreach($theloai as $tl)
            <tr class="odd gradeX" align="center">
              <td>{{$tl->id}}</td>
              <td>{{$tl->ten}}</td>
              <td>{{$tl->tenkhongdau}}</td>
              <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoa-theloai',['id' => $tl->id])}}">
                  Delete</a></td>
              <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                  href="{{route('sua-theloai',['id' => $tl->id])}}">Edit</a></td>
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