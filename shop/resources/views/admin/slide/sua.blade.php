 @extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>{{$slide->id}}</small>
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

                <form action="admin/slide/sua/{{$slide->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                   <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="image" value="">
                        <img src="source/images/slide/{{$slide->image}}" alt="" width="100px">
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input class="form-control" name="link" placeholder="Nhập link" value="{{$slide->link}}"/>
                    </div>

                    <button type="submit" class="btn btn-default">SỬA</button>

                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection