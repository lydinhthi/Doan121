@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif

                <form action="admin/users/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Họ Tên</label>
                        <input class="form-control" name="name" placeholder="Nhập tên người dùng" />
                    </div>

                    <!-- type="email" để kiểm tra email có nhập đúng định dạng không -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email" />
                    </div>

                    <div class="form-group">
                        <label>Quyền người dùng</label>
                        <label class="radio-inline">
                            <input name="admin_user" value="1" checked="" type="radio">ADMIN
                        </label>
                        <label class="radio-inline">
                            <input name="admin_user" value="0" type="radio">USER
                        </label>
                    </div>

                    <!-- type="password" để ẩn mật khẩu -->
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu người dùng" />
                    </div>
                    
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="re_password" placeholder="Nhập lại mật khẩu" />
                    </div>

                    <button type="submit" class="btn btn-default">THÊM</button>
                    <button type="reset" class="btn btn-default">RESET</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection