`    @extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users
                    <small>Danh sách</small>
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
                        <th>Họ Tên</th>
                        <th>Email</th>
                        <th>Quyền người dùng</th>
                        <th>Thời gian khởi tạo</th>
                        <th>Thời gian cập nhật cuối</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $us)
                        <tr class="odd gradeX" align="center">
                            <td>{{$us->id}}</td>
                            <td>{{$us->name}}</td>
                            <td>{{$us->email}}</td>
                            <td>
                                @if($us->admin_user == 1)
                                {{"Admin"}}
                                @else
                                {{"User"}}
                                @endif
                            </td>
                            <td>{{$us->created_at}}</td>
                            <td>{{$us->updated_at}}</td>
                            
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/users/xoa/{{$us->id}}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/users/sua/{{$us->id}}">Sửa</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       <!--  /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection