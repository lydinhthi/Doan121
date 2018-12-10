<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bill;
use App\BillDetail;
use App\Customer;

class hoadonController extends Controller
{
    //
    public function getDanhSach()
    {
    	$hoadon = Bill::has('customer')->orderBy('complete', 'ASC')->get();
        //dd($hoadon);
    	return view('admin.hoadon.danhsach', compact('hoadon'));
    }


    public function getXoa($id)
    {
    	$hoadon = Bill::find($id);
    	$hoadon->delete();

    	return redirect('admin/hoadon/danhsach')->with('thongbao','Xóa thành công');
    }


    public function getChiTiet($id)
    {
        $hoadonchitiet = BillDetail::where('id_bill', '=', $id)->with('product')->get();
        $kh = Bill::with('customer')->where('id', '=', $id)->get();
        return view('admin.hoadon.chitiet', compact('hoadonchitiet', 'kh'));
    }


    public function getXoaChiTiet($id)
    {
        $hoadonchitiet = BillDetail::find($id);
        $hoadonchitiet->delete();

        return redirect('admin/hoadon/chitiet')->with('thongbao','Xóa thành công');
    }

    public function getDaXuLy($id)
    {
        $hoadon = Bill::find($id);
        $hoadon->complete = 1;
        $hoadon->save();
        return redirect('admin/hoadon/danhsach/')->with('thongbao','Đã đánh dấu hóa đơn là đã xử lý');
    }
    public function getHoanThanh($id)
    {
        $hoadon = Bill::find($id);
        $hoadon->complete = 2;
        $hoadon->save();
        return redirect('admin/hoadon/danhsach/')->with('thongbao','Đã đánh dấu hóa đơn là đã hoàn thành');
    }
    public function getChuaXuLy($id)
    {
        $hoadon = Bill::find($id);
        $hoadon->complete = 0;
        $hoadon->save();
        return redirect('admin/hoadon/danhsach/')->with('thongbao','Đã đánh dấu hóa đơn là chưa xử lý');
    }
}
