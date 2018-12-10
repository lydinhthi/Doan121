<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Thư viện sử dụng lớp đăng nhập
use Illuminate\Support\Facades\Auth;

use App\User;


class userController extends Controller
{
    //
    public function getDanhSach()
    {
        $users = User::all();
        return view('admin.users.danhsach', compact('users'));
    }


    public function getThem()
    {
        $users = User::all();
        return view('admin.users.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|min:4|max:50',
                'email' => 'required|email',
                'password' => 'required',
                're_password' => 'required',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên user',
                'name.min'=>'Tên user phải có độ dài từ 4 đến 50 ký tự',
                'name.max'=>'Tên user phải có độ dài từ 4 đến 50 ký tự',
                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',
                'email.unique'=>'Email đã tồn tại',
                'password.required' => 'Bạn chưa nhập mật khẩu',
                're_password.required' => 'Bạn chưa nhập lại mật khẩu',
                're_password.same' => 'Mật khẩu nhập lại không trùng với mật khẩu trên'
            ]
            );

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);       //bcrypt : Mã hóa mật khẩu
        $user->admin_user = $request->admin_user;

        $user->save();

        return redirect('admin/users/them')->with('thongbao','Thêm thành công');
    }


    public function getSua($id)
    {
        $users = User::find($id);
        return view('admin.users.sua',['users'=>$users]);
    }

    public function postSua(Request $request,$id)
    {
        $this->validate($request,
            [
                'name' => 'min:4|max:50|required|unique:users,name,'.$id,
                'phone' => 'required',
                'address' => 'required',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên user',
                'name.unique'=>'Tên user đã tồn tại',
                'name.min'=>'Tên user phải có độ dài từ 4 đến 50 ký tự',
                'name.max'=>'Tên user phải có độ dài từ 4 đến 50 ký tự',

                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'address.required' => 'Bạn chưa nhập địa chỉ',
                
            ]
            );

        $user = User::find($id);
        $user->name = $request->name;
        $user->admin_user = $request->admin_user;
        $user->phone = $request->phone;
        $user->address = $request->address;

        if($request->thaydoiPassword == "on")
        {
            $this->validate($request,
                [
                    'password' => 'required',
                    'remember_token' => 'required|same:password'
                ],
                [
                    'password.required' => 'Bạn chưa nhập mật khẩu',
                    'remember_token.required' => 'Bạn chưa nhập lại mật khẩu',
                    'remember_token.same' => 'Mật khẩu nhập lại không trùng với mật khẩu trên'
                ]
                );
            $user->password = bcrypt($request->password);       //bcrypt : Mã hóa mật khẩu
            $user->remember_token = $request->remember_token;
        }

        $user->save();

        return redirect('admin/users/sua/'.$id)->with('thongbao','Sửa thành công');
    }


    public function getXoa($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('admin/users/danhsach')->with('thongbao','Xóa thành công');
    }



    public function getDangnhapAdmin()
    {
        return view('admin/login');
    }

    public function postDangnhapAdmin(Request $request)
    {
        
        // dd($request->password,$request->email);
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required|min:4|max:20'
            ],
            [
                'email.required'=>'Bạn chưa nhập Email',
                'password.required'=>'Bạn chưa nhập Password',
                'password.min'=>'Password không được ít hơn 4 ký tự',
                'password.max'=>'Password không được nhiều hơn 20 ký tự'
            ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('admin/loaisanpham/danhsach');
        }
        else
        {
            return redirect('admin/dangnhap')->with('thongbao','Email hoặc Password của bạn không chính xác. Mời bạn đăng nhập lại!');
        }
    }

    public function getDangxuatAdmin()
    {
        Auth::logout();
        return view('admin/login');
    }
    
}
