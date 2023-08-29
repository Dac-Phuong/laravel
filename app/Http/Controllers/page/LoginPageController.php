<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginPageController extends Controller
{
    public function loginPage()
    {
        $categories = Categories::all();
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        $products_sale = DB::table('products')
            ->where('sale', '>=', 5)
            ->orderBy('sale', 'desc')
            ->take(5)
            ->get();
        return view('frontEnd.auth.login', compact('categories', 'products', 'posts', 'banner', 'products_sale'));
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Trường này không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Trường này không được để trống',
        ]);
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('getUser', Auth::user()->id)->with('success', 'Đăng nhập thành công ');
        } else {
            return redirect()->back()->with('error', 'Đăng nhập thất bại hãy kiểm tra lại thông tin đăng nhập');
        }
    }
    public function logout()
    {
        if (Auth::user()) {
            Auth::logout();
            return redirect()->route('viewLogin')->with('success', 'Đăng xuất thành công');
        }
    }
}
