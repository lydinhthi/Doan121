@extends('master')
@section('content')

<div class="fullwidthbanner-container">
			<div class="row container-fluid">
				<div class="col-md-10 col-sm-10">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
							<div class="banner" >
								<ul>
									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
										<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
											<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/banner1.png" data-src="source/assets/dest/images/banner1.png" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/banner1.png'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
											</div>
										</div>

									</li>
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
										<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
											<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/banner2.png" data-src="source/assets/dest/images/banner2.png" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/banner2.png'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
											</div>
										</div>
									</li>

									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
										<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
											<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/banner3.jpg" data-src="source/assets/dest/images/banner3.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/banner3.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
											</div>
										</div>

									</li>

									<li data-transition="boxfade" data-slotamount="20" class="active-revslide current-sr-slide-visible" style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
										<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
											<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/banner4.jpg" data-src="source/assets/dest/images/banner4.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/banner4.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
											</div>
										</div>

									</li>
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<div class="col-md-2 col-sm-2">
					<div class="widget-banner block">
						<div class="">
							<div class="image-box">
								<div class="img-banner effect">
									<a href="{{route('tintuc')}}">
										<img style="width: 279px;height: 456px;" src='source/assets/dest/images/home_bannerone.png' alt='Adv Banner' class='img-responsive' />
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--slider-->
		<div class="container">
			<div class="box-apreassurances">
				<div class="row">
					<div class="">
						<div class="col-md-3 description">
							<img src="source/assets/dest/images/home_blockhtml_icon_1.png" alt="" >
							<div class="media-body">
								<h5>Miễn phí vận chuyển</h5>
								<p>Trong vòng 3km tiết kiệm
								</p>
							</div>
						</div>
						<div class="col-md-3 description">
							<img src="source/assets/dest/images/home_blockhtml_icon_2.png" alt="">
							<div class="media-body">
								<h5>Hỗ trợ khách hàng</h5>
								<p>24/24 tất cả các ngày</p>
							</div>
						</div>
						<div class="col-md-3 description">
							<img src="assets/dest/images/home_blockhtml_icon_3.png" alt="">
							<div class="media-body">
								<h5>Mua hàng tiện lợi</h5>
								<a href="">Nhấp và chọn</a>
							</div>
						</div>
						<div class="col-md-3 description">
							<img src="source/assets/dest/images/home_blockhtml_icon_4.png" alt="">
							<div class="media-body">
								<h5>Giá cả hấp dẫn</h5>
								<p>Giảm tới 40%</p>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4 class="text-center">Món mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($new_product as $new)
								<div class="col-sm-3">
									<div class="single-item">
										@if($new->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/{{$new->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price" style="font-size: 18px">
											@if($new->promotion_price==0)
												<span class="flash-sale">{{number_format($new->unit_price)}} đồng</span>
											@else
												<span class="flash-del">{{number_format($new->unit_price)}} đồng</span>
												<span class="flash-sale">{{number_format($new->promotion_price)}} đồng</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham',$new->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row">{{$new_product->links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4 class="text-center">Yêu thích</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sanpham_khuyenmai)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($sanpham_khuyenmai as $spkm)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$spkm->id)}}"><img src="source/image/product/{{$spkm->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$spkm->name}}</p>
											<p class="single-item-price"  style="font-size: 18px">
												<span class="flash-del">{{number_format($spkm->unit_price)}} đồng</span>
												<span class="flash-sale">{{number_format($spkm->promotion_price)}} đồng</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham',$spkm->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
							<div class="row">{{$sanpham_khuyenmai->links()}}</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
@endsection