 @extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hóa đơn
                    <small>Danh sách</small>
                </h1>
            </div>
            
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>Xử lý</th>
                        <th>ID</th>
                        <th>Tên khách hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Tổng tiền</th>
                        <th>Hình thức thanh toán</th>
                        <th>Ghi chú</th>
                        <th>Chi tiết</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hoadon as $hd)
                        <tr class="odd gradeX" align="center">
                            @if($hd->complete == "")
                                <td><a href="admin/hoadon/xuly/{{$hd->id}}">Chờ nhận hàng</a></td>
                            
                            @elseif($hd->complete == "1")
                                <td><a href="admin/hoadon/hoanthanh/{{$hd->id}}">Đang giao hàng</a></td>
                            @elseif($hd->complete == "2")
                                <td><a href="admin/hoadon/chuaxuly/{{$hd->id}}">Đã hoàn thành</a></td>
                            @endif
                                <td>{{$hd->id}}</td>
                           
                            <td><a href="admin/khachhang/chitiet/{{$hd->customer->id}}">{{$hd->customer->name}}</a></td>
                            <td>{{$hd->created_at}}</td>
                            <td>{{number_format($hd->total)}}</td>
                            <td>{{$hd->payment}}</td>
                            <td>{{$hd->note}}</td>
                            <td class="center"><i class="fa fa-info  fa-fw"></i><a href="admin/hoadon/chitiet/{{$hd->id}}"> Chi Tiết</a></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/hoadon/xoa/{{$hd->id}}"> Xóa</a></td>
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