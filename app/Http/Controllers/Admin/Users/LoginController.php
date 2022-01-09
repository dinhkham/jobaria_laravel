<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public $data = [];
   public function index()
   {
       $data['title'] = 'Login Admin Dashboard';
       $data['errorMessage'] = 'Vui lòng kiểm tra lại email hoặc mật khẩu';
       return view('admin.users.login',$data);
   }
   public function store(Request $request)
   {
       $rules = [
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6'
        ];
        $message = [
            'email.required' => ':attribute không được trống',
            'password.required' => ':attribute không được trống',
            'password.min' => ':attribute không được nhỏ hơn :min ký tự',
        ];
       $request->validate($rules, $message);
       $remember = $request->input('remember');
       if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
           return redirect()->route('admin');
       }
       session()->flash('error', 'Email hoặc password không đúng');
       return redirect()->back();
   }
    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('login');
    }
}
