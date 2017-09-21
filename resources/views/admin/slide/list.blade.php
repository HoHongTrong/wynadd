@extends('admin.layouts.master')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Slide
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
          <th>Nội Dung</th>
          <th>Hình</th>
          <th>link</th>
          <th>Delete</th>
          <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($slide as $sd)
        <tr class="odd gradeX" align="center">
          <td>{{$sd->id}}</td>
          <td>{{$sd->ten}}</td>
          <td>{{$sd->noidung}}</td>
          <td>
            <img width="400px" height="" src="upload/slide/{{$sd->Hinh}}">
          </td>
          <td>{{$sd->link}}</td>
          <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoa-slide',['id'=>$sd->id])}}"> Delete</a></td>
          <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('sua-slide',['id'=>$sd->id])}}">Edit</a></td>
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