<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function getList() {
    $user = User::all();
    return view('admin.quantri.list', ['user' => $user]);
  }

  public function getAdd() {
    return view('admin.quantri.add');
  }
  public function postAdd(Request $request) {
    $this->validate($request, [
      'name' => 'required|min:3',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|min:3|max:32',
      'passwordAgain' => 'required|same:password'
    ],
      [
        'name.required' => 'Bạn chưa nhập tên',
        'name.min' => 'Tên người dùng có ít nhất 3 kí tự',
        'email.required' => 'Bạn chưa nhập email',
        'email.email' => 'Bạn chưa nhập đúng định dạng email',
        'email.unique' => 'Email đã tồn tại',
        'password.required' => 'Bạn chưa nhập password',
        'password.min' => 'Tên người dùng có ít nhất 3 kí tự',
        'password.max' => 'Tên người dùng có nhiều nhất 32 kí tự',
        'passwordAgain.required' => 'Bạn chưa nhập lại password',
        'passwordAgain.same' => 'password chưa đúng'
      ]);
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->quyen = 1;
    $user->save();
    return redirect('danhsach-admin')->with('thongbao', 'thêm người quản trị thành công');
  }
//======= delete
  public function getDelete($id) {
    $user = User::find($id);
    $user->delete();
    return redirect('admin/user/list')->with('thongbao', 'xóa user thành công');
  }


  public function getloginAdmin(){
    return view('admin.login');
  }
  public function postloginAdmin(Request $request){

    $this->validate($request,[
      'email'=>'required',
      'password'=>'required|min:3|max:32'
    ],[
      'email.required'=>'Bạn chưa nhập email',
      'password.min'=>'Tên người dùng có ít nhất 3 kí tự',
      'password.max'=>'Tên người dùng có nhiều nhất 32 kí tự'
    ]);
    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    {
      return redirect('admin/danhsach-tintuc');
    }
    else{
      return redirect('admin/login')->with('thongbao','đăng nhập không thành công');
    }
  }
  public function getlogoutAdmin(){
    Auth::logout();
    return redirect('admin/login');
  }
}
