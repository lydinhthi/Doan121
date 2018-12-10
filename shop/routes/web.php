<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'

]);
Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitiet'
]);
Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienHe'
]);
Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@getGioithieu'
]);
Route::get('tin-tuc',[
	'as'=>'tintuc',
	'uses'=>'PageController@getTintuc'
]);
Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);
Route::get('del-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);
Route::get('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);

Route::post('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);

Route::get('/dat-hang/chi-tiet',[
	'uses'=>'PageController@getDetailBill'
])->name('dathang.chitiet');


Route::get('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@getLogin'
]);
Route::post('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@postLogin'
]);

Route::get('dang-ki',[
	'as'=>'signin',
	'uses'=>'PageController@getSignin'
]);

Route::post('dang-ki',[
	'as'=>'signin',
	'uses'=>'PageController@postSignin'
]);
Route::get('dang-xuat',[
	'as'=>'logout',
	'uses'=>'PageController@postLogout'
]);
Route::get('search',[
	'as'=>'search',
	'uses'=>'PageController@getsearch'
]);

// logn admin
Route::get('admin/dangnhap','userController@getDangnhapAdmin');


Route::post('admin/dangnhap','userController@postDangnhapAdmin');
Route::get('admin/logout','userController@getDangxuatAdmin')->name('logout');




Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'loaisanpham'],function(){
		//admin/loaisanpham/danhsach
		Route::get('danhsach','loaisanphamController@getDanhSach');

		Route::get('sua/{id}','loaisanphamController@getSua');
		Route::post('sua/{id}','loaisanphamController@postSua');
		Route::get('xoa/{id}','loaisanphamController@getXoa');

		Route::get('them','loaisanphamController@getThem');
		Route::post('them','loaisanphamController@postThem');



	});

	Route::group(['prefix'=>'sanpham'],function(){
		//admin/loaisanpham/danhsach
		Route::get('danhsach','sanphamController@getDanhSach');

		Route::get('sua/{id}','sanphamController@getSua');
		Route::post('sua/{id}','sanphamController@postSua');

		Route::get('xoa/{id}','sanphamController@getXoa');
		
		//Hàm get gọi chức năng thêm lên
		Route::get('them','sanphamController@getThem');
		//Hàm post nhận dữ liệu rồi lưu vào cơ sở dữ liệu database
		Route::post('them','sanphamController@postThem');

	});


	Route::group(['prefix'=>'users'],function(){
		//admin/loaisanpham/danhsach
		Route::get('danhsach','userController@getDanhSach');

		Route::get('sua/{id}','userController@getSua');
		Route::post('sua/{id}','userController@postSua');

		Route::get('xoa/{id}','userController@getXoa');
		
		//Hàm get gọi chức năng thêm lên
		Route::get('them','userController@getThem');
		//Hàm post nhận dữ liệu rồi lưu vào cơ sở dữ liệu database
		Route::post('them','userController@postThem');

	});

	Route::group(['prefix'=>'hoadon'],function(){
		//admin/loaisanpham/danhsach
		Route::get('danhsach','hoadonController@getDanhSach');

		Route::get('xoa/{id}','hoadonController@getXoa');

		Route::get('chitiet/{id}','hoadonController@getChiTiet');

		Route::get('xoachitiet/{id}','hoadonController@getXoaChiTiet');

		Route::get('xuly/{id}', 'hoadonController@getDaXuLy');
		Route::get('hoanthanh/{id}', 'hoadonController@getHoanThanh');

		Route::get('chuaxuly/{id}', 'hoadonController@getChuaXuLy');

	});

	Route::group(['prefix'=>'khachhang'],function(){
		//admin/loaisanpham/danhsach
		Route::get('danhsach','khachhangController@getDanhSach');

		Route::get('sua','khachhangController@getSua');

		Route::get('them','khachhangController@getThem');


	});

	Route::group(['prefix'=>'slide'],function(){
		//admin/loaisanpham/danhsach
		Route::get('danhsach','slideController@getDanhSach');
		
		Route::get('them','slideController@getThem');
		Route::post('them','slideController@postThem');
		// sửa
		Route::get('sua/{id}','slideController@getSua');
		Route::post('sua/{id}','slideController@postSua');
		// xóa
		Route::get('xoa/{id}','slideController@getDelete');

	});
	});

