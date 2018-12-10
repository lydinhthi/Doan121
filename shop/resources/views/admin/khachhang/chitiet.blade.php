@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chi tiết khách hàng</h1>
            </div>
            
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên khách hàng</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Ghi chú</th>
                        <th>Thời gian khởi tạo</th>
                        <th>Thời gian cập nhật cuối</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td>{{$khachhang->id}}</td>
                        <td>{{$khachhang->name}}</td>
                        <td>{{$khachhang->gender}}</td>
                        <td>{{$khachhang->email}}</td>
                        <td>{{$khachhang->address}}</td>
                        <td>{{$khachhang->phone_number}}</td>
                        <td>{{$khachhang->note}}</td>
                        <td>{{$khachhang->created_at}}</td>
                        <td>{{$khachhang->updated_at}}</td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection