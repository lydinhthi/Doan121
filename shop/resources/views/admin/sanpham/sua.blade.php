 @extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>{{$sanpham->name}}</small>
                </h1>
            </div>
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

                <form action="admin/sanpham/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input class="form-control" name="name" placeholder="Nhập tên sản phẩm" value="{{$sanpham->name}}" />
                    </div>
                    
                    <div class="form-group">
                        <label>Loại sản phẩm</label>
                        <select class="form-control" name="id_type"> 
                            @foreach($loaisanpham as $lsp)
                                <option 
                                    @if($sanpham->id_type == $lsp->id)
                                        {{"selected"}}
                                    @endif
                                    value="{{$lsp->id}}">{{$lsp->name}}</option>
                            @endforeach
                        </select>  
                    </div>

                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" rows="3" name="description">{{$sanpham->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Giá tiền</label>
                        <input class="form-control" rows="1" name="unit_price" value="{{$sanpham->unit_price}}"></input>
                    </div>
                     <div class="form-group">
                        <label>Gía khuyến mãi</label>
                        <input class="form-control" rows="1"  value="{{$sanpham->promotion_price}}" name="promotion_price">
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="fImages">
                        <img src="source/image/product/{{$sanpham->image}}" alt="" width="100px">
                    </div>
                    <div class="form-group">
                        <label>Số hàng tồn kho</label>
                        <input class="form-control" rows="1" name="unit" value="{{$sanpham->unit}}">
                    </div>
                  
                    <button type="submit" class="btn btn-success">SỬA</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
        {{-- comment --}}
        
       
        {{-- end-row --}}
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection