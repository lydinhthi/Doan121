@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hóa đơn
                    <small>Chi tiết hóa đơn</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif

            @foreach($kh as $cus)
                @if($cus->complete == "")
                    <td><a href="admin/hoadon/xuly/{{$cus->id}}">Hàng đang trên đường</a></td>
                @else
                    <td><a href="admin/hoadon/chuaxuly/{{$cus->id}}">Hàng đang đóng gói</a></td>
                @endif
                <table class="table table-bordered" align="center">
                    <tr>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td>{{$cus->customer->name}}</td>
                        <td>{{$cus->customer->phone_number}}</td>
                        <td>{{$cus->customer->address}}</td>
                        <td>{{$cus->customer->email}}</td>
                    </tr>
                </table>
            @endforeach
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá thành</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hoadonchitiet as $hdct)
                        <tr class="odd gradeX" align="center">
                            <td>{{$hdct->id}}</td>
                            <td>{{$hdct->product->name}}</td>
                            <td>{{$hdct->quantity}}</td>
                            <td>{{number_format($hdct->unit_price)}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/hoadon/xoachitiet/{{$hdct->id}}"> Xóa</a></td>
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