@extends('admin.layouts.master')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Admin
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
          <th>email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $u)
        <tr class="odd gradeX" align="center">
          <td>{{$u->id}}</td>
          <td>{{$u->ten}}</td>
          <td>{{$u->email}}</td>
          <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoa-admin',['id'=>$u->id])}}"> Delete</a></td>
          <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('sua-admin',['id'=>$u->id])}}">Edit</a></td>
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