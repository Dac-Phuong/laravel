<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Categories;
use App\Models\Contacts;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Posts;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function homePage()
    {
        $categories = Categories::all();
        $products = Products::all();
        $posts = Posts::all();
        $banner = Banner::all();
        $products_sale = DB::table('products')
            ->where('sale', '>=', 5)
            ->orderBy('sale', 'desc')
            ->take(5)
            ->get();

        return view('layout', compact('products', 'posts', 'banner', 'products_sale', 'categories'));
    }

    public function getProductIPhone($id)
    {
        $categories = Categories::all();
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        $item_product = Products::where('category_id', $id)->get();
        $category_name = Categories::find($id)->name;
        $products_sale = DB::table('products')
            ->where('sale', '>=', 5)
            ->orderBy('sale', 'desc')
            ->take(5)
            ->get();
        return view('frontEnd.page.product-category', compact('categories', 'products', 'posts', 'banner', 'item_product', 'category_name', 'products_sale'));
    }
    public function infoUser()
    {
        $categories = Categories::all();
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        $orders = Order::all();
        $orders_detail = OrderDetail::all();
        $products_sale = DB::table('products')
            ->where('sale', '>=', 5)
            ->orderBy('sale', 'desc')
            ->take(5)
            ->get();
        return view('frontEnd.page.user', compact('categories', 'products', 'posts', 'banner', 'products_sale', 'orders', 'orders_detail'));
    }
    public function index(Request $request)
    {
        $categories = Categories::all();
        $posts = Posts::all();
        $banner = Banner::all();
        $products_sale = DB::table('products')
            ->where('sale', '>=', 5)
            ->orderBy('sale', 'desc')
            ->take(5)
            ->get();

        $keyword = $request->input('search');
        $products = Products::where('name', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->get();
        return view('frontEnd.page.search', compact('products', 'categories', 'banner', 'posts', 'products_sale'));
    }
    public function getProducts()
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
        return view('frontEnd.page.products', compact('categories', 'products', 'posts', 'banner', 'products_sale'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function getProductDetail($id)
    {
        $categories = Categories::all();
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        $item_product = Products::find($id);
        $products_sale = DB::table('products')
            ->where('sale', '>=', 5)
            ->orderBy('sale', 'desc')
            ->take(5)
            ->get();
        return view('frontEnd.components.productDetail', compact('categories', 'products', 'posts', 'banner', 'item_product', 'products_sale'));
    }
    public function getListPosts()
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
        return view('frontEnd.page.posts', compact('categories', 'products', 'posts', 'banner', 'products_sale'));
    }
    public function getDetailPosts($id)
    {
        $categories = Categories::all();
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        $item_posts = Posts::find($id);
        $products_sale = DB::table('products')
            ->where('sale', '>=', 5)
            ->orderBy('sale', 'desc')
            ->take(5)
            ->get();
        return view('frontEnd.page.postDetail', compact('categories', 'products', 'posts', 'banner', 'item_posts', 'products_sale'));
    }



    // thông tin liên hệ
    public function getContact()
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
        return view('frontEnd.page.contact', compact('categories', 'products', 'posts', 'banner', 'products_sale'));
    }
    // 
    public function postContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'title' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Trường này không được để trống',
            'email.required' => 'Trường này không được để trống',
            'phone.required' => 'Trường này không được để trống',
            'title.required' => 'Trường này không được để trống',
            'description.required' => 'Trường này không được để trống',
        ]);

        if (Auth::check()) {
            $user_id = Auth::user()->id;
            Contacts::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'title' => $request->title,
                'description' => $request->description,
                'user_id' => $user_id,
            ]);
            return redirect()->back()->with('success', 'Gửi thành thành công ! chúng tôi sẽ phản hồi lại bạn sớm nhất');
        } else {
            return redirect()->back()->with('error', 'Bạn chưa đăng nhập');
        }
    }
}
