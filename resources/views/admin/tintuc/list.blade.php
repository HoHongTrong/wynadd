@extends('admin.layouts.master')
@section('content')

  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Tin Tức
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
            <th>Tiêu Đề</th>
            <th>Tóm Tắt</th>
            <th>Thể Loại</th>
            <th>Loại Tin</th>
            <th>Xem</th>
            <th>Nổi Bật</th>
            <th>Delete</th>
            <th>Edit</th>
          </tr>
          </thead>
          <tbody>
          @foreach($tintuc as $tt)
            <tr class="odd gradeX" align="center">
              <td>{{$tt->id}}</td>
              <td>
                <p>{{$tt->tieude}}</p>
                <img width="100px" height="100px" src="upload/tintuc/{{$tt->Hinh}}"/>
              </td>
              <td>{{$tt->tomtat}}</td>
              <td>{{$tt->LoaiTin->theloai->ten}}</td>
              <td>{{$tt->LoaiTin->ten}}</td>
              <td>{{$tt->soluotxem}}</td>
              <td>
                @if($tt->noibat == 0)
                  {{'không'}}
                @else
                  {{'có'}}
                @endif
              </td>

              <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoa-tintuc',['id' => $tt->id])}}">
                  Delete</a></td>
              <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('sua-tintuc',['id' =>$tt->id])}}">Edit</a>
              </td>
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