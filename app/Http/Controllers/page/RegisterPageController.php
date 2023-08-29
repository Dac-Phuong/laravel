<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterPageController extends Controller
{
    public function getViewRegister()
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
        $topProducts = DB::table('order_details')
            ->select('products_id', DB::raw('SUM(quantity) as total_ordered'))
            ->groupBy('products_id')
            ->orderByDesc('total_ordered')
            ->limit(5)
            ->get();
        $productIds = $topProducts->pluck('products_id');
        $selling_product = Products::whereIn('id', $productIds)->get();
        return view('frontEnd.auth.register', compact('categories', 'products', 'posts', 'banner', 'products_sale', 'selling_product'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Trường này không được để trống',
            'email.required' => 'Trường này không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại trên hệ thống',
            'phone.required' => 'Trường này không được để trống',
            'password.required' => 'Trường này không được để trống',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('userLogin')->with('success', 'Đăng ký thành công ! vui lòng đăng nhập');
    }
}
