<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->roles == 1) {
                return $next($request);
            }
            if (Auth::user()->roles == 0) {
                Auth::logout();
                return redirect()->back()->with('error', 'bạn không có quyền đăng nhập vào trang quản lý');
            }
        } else {
            Auth::logout();
            return redirect()->route('getLoginAdmin')->with('error', 'tài khoản người dùng hoặc mật khẩu của bạn không chính xác');
        }
    }
}
