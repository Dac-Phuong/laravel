<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            if (Auth::user()->roles == 1) {
                return redirect()->route('home');
            }
            if (Auth::user()->roles == 0) {
                return redirect()->back()->with('error', 'bạn không có quyền đăng nhập vào trang quản lý');
            } else {
                Auth::logout();
                return redirect()->back();
            }
        } else {
            return view('admin.auth.login');
        }
    }
    public function postLogin(Request $request)
    {

        $this->Validate(
            $request,
            [
                'email' => 'required|email',
                'password' => 'required '
            ],
            [
                'email.required' => 'Trường email là bắt buộc',
                'password.required' => 'Trường mật khẩu là bắt buộc',
                'email.email' => 'Email không đúng định dạng',
            ]
        );
        $email = $request->get('email');
        $password = $request->get('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('getLoginAdmin');
    }
}
