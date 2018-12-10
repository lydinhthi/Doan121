 @extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users
                    <small>{{$users->name}}</small>
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

                <form action="admin/users/sua/{{$users->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Họ Tên</label>
                        <input class="form-control" name="name" placeholder="Nhập tên người dùng" value="{{$users->name}}" />
                    </div>

                    <!-- type="email" để kiểm tra email có nhập đúng định dạng không -->
                    <!-- readonly="" chỉ được phép đọc, không được sửa -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email" value="{{$users->email}}" readonly=""/>
                    </div>

                    <div class="form-group">
                        <label>Quyền người dùng</label>
                        <label class="radio-inline">
                            <input name="admin_user" value="1"
                            @if($users->admin_user == 1)
                            {{"checked"}}
                            @endif
                            type="radio">ADMIN
                        </label>
                        <label class="radio-inline">
                            <input name="admin_user" value="0" 
                            @if($users->admin_user == 0)
                            {{"checked"}}
                            @endif
                            type="radio">USER
                        </label>
                    </div>

                    <!-- type="password" để ẩn mật khẩu -->
                    <!-- type="checkbox" tạo nút check đổi mật khẩu -->
                    <!-- disabled="" khóa phần nhập mật khẩu khi kích nút check đổi mật khẩu -->
                    <div class="form-group">
                        <label>Đổi Password &nbsp;</label>
                        <input type="checkbox" id="thaydoiPassword" name="thaydoiPassword">
                        <input type="password" class="form-control password" name="password" placeholder="Nhập mật khẩu người dùng" disabled=""/>

                    </div>

                   <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" name="phone" placeholder="Nhập số điện thoại người dùng" />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="address" placeholder="Nhập địa chỉ người dùng" />
                    </div>
                    
                    <div class="form-group">
                        <label>Nhớ token_pass</label>
                        <input type="password" class="form-control password" name="remember_token" placeholder="Nhập remember token" disabled="" />
                    </div>

                    <button type="submit" class="btn btn-default">SỬA</button>
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



<!-- Bắt sự kiện nút check đổi mật khẩu -->
@section('script')
    <script>
        $(document).ready(function(){
            $("#thaydoiPassword").change(function(){
                if($(this).is(":checked"))
                {
                    // $('.password') là class password ở trên
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection