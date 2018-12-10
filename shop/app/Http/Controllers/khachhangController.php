<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

class khachhangController extends Controller
{
    //
    public function getDanhSach()
    {
    	$khachhang = Customer::all();
    	return view('admin.khachhang.danhsach', compact('khachhang'));
    }


    public function getXoa($id)
    {
    	$khachhang = Customer::find($id);
    	$khachhang->delete();

    	return redirect('admin/khachhang/danhsach')->with('thongbao','Xóa thành công');
    }

    public function findCustomer($id) 
    {
        $khachhang = Customer::find($id);
        return view('admin.khachhang.detail', compact('khachhang'));
    }

}
