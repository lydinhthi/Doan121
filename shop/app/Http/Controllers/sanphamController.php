<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\ProductType;
use App\Product;
use Illuminate\Support\Facades\Input;

class sanphamController extends Controller
{
    public function getDanhSach()
    {
        $sanpham = Product::with('product_type')->get();
    	return view('admin.sanpham.danhsach', compact('sanpham'));
    }
    
    public function getThem()
    {
        $loaisanpham = ProductType::all();
    	return view('admin.sanpham.them', compact('loaisanpham'));
    }

    public function postThem(Request $request)
    {
    	$this->validate($request,
    		[
    			'name' => 'required|unique:products,name|min:4|max:100',
                'id_type' => 'required',
                // 'description' => 'required',
                'unit_price' => 'required',
                'fImages' => 'required',
                'unit' => 'required',
                // 'sale'=>'required',
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên sản phẩm',
    			'name.unique'=>'Tên sản phẩm đã tồn tại',
    			'name.min'=>'Tên sản phẩm phải có độ dài từ 4 đến 100 ký tự',
    			'name.max'=>'Tên sản phẩm phải có độ dài từ 4 đến 100 ký tự',

                'id_type.required'=>'Bạn chưa chọn id loại sản phẩm',
                // 'description.required' => 'Bạn chưa mô tả sản phẩm',
                'unit_price.required' => 'Bạn chưa nhập giá tiền sản phẩm',
                'fImages.required' => 'Bạn chưa chọn hình ảnh sản phẩm',
                'unit.required' => 'Bạn chưa nhập đơn vị sản phẩm',
    		]);
        if(Input::hasFile('fImages')) {
            $file = Input::file('fImages');
            $file->move('source/images/product', $file->getClientOriginalName());
        }
    	$sanpham = new Product;
    	$sanpham->name = $request->name;
        $sanpham->id_type = $request->id_type;
        $sanpham->description = $request->description;
        $sanpham->unit_price = $request->unit_price;
        $sanpham->promotion_price=$request->sale;
        $sanpham->image = $file->getClientOriginalName();
        $sanpham->unit = $request->unit;
        
    	$sanpham->save();

    	return redirect('admin/sanpham/them')->with('thongbao','Thêm thành công');
    }


    public function getSua($id)
    {
        // $comment=Comment::find($id);
        $loaisanpham = ProductType::all();
    	$sanpham = Product::find($id);
    	return view('admin.sanpham.sua', compact('sanpham', 'loaisanpham'));
    }

    public function postSua(Request $request,$id)
    {
        $loaisanpham = ProductType::all();
    	$this->validate($request,
            [
                'name' => 'required|min:4|max:100',
                'id_type' => 'required',
                'unit_price' => 'required',
                'unit' => 'required',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên sản phẩm',
                'name.unique'=>'Tên sản phẩm đã tồn tại',
                'name.min'=>'Tên sản phẩm phải có độ dài từ 4 đến 100 ký tự',
                'name.max'=>'Tên sản phẩm phải có độ dài từ 4 đến 100 ký tự',
                'id_type.required'=>'Bạn chưa chọn id loại sản phẩm',
                'unit_price.required' => 'Bạn chưa nhập giá tiền sản phẩm',
                'unit.required' => 'Bạn chưa nhập số lượng sản phẩm',
            ]
            );
        $sanpham = Product::find($id);
        if(Input::hasFile('fImages')) {
            $file = Input::file('fImages');
            $file->move('source/images/product', $file->getClientOriginalName());
            $sanpham->image = $file->getClientOriginalName();
            
        }
        $sanpham->name = $request->name;
        $sanpham->id_type = $request->id_type;
        $sanpham->description = $request->description;
        $sanpham->unit_price = $request->unit_price;
        $sanpham->promotion_price=$request->promotion_price;
        $sanpham->unit = $request->unit;
        
        $sanpham->save();

        return redirect('admin/sanpham/sua/'.$id)->with('thongbao','Sửa thành công');
    }


    public function getXoa($id)
    {
    	$sanpham = Product::find($id);
    	$sanpham->delete();

    	return redirect('admin/sanpham/danhsach')->with('thongbao','Xóa thành công');
    }

}
