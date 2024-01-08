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
        foreach ($categories as $key => $value) {
            $value["products"] = Products::where('category_id', $value->id)->get();
        }
        $products = Products::all();
        $posts = Posts::all();
        $banner = Banner::all();
        // lấy ra 5 sản phẩm khuyến mãi  lớn nhất
        $products_sale = DB::table('products')->orderBy('sale', 'desc')->limit(5)->get();
        // lấy ra 5 sản phẩm bán chạy nhất 
        $selling_product = DB::table('products')->orderBy('status', 'desc')->limit(5)->get();

        return view('layout', compact('products', 'posts', 'banner', 'products_sale', 'categories', 'selling_product'));
    }

    public function getProductIPhone($id)
    {
        $categories = Categories::all();
        foreach ($categories as $key => $value) {
            $value["products"] = Products::where('category_id', $value->id)->get();
        }
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        $item_product = Products::where('category_id', $id)->get();
        $category_name = Categories::find($id)->name;
        // lấy ra 5 sản phẩm khuyến mãi 
        $products_sale = DB::table('products')->orderBy('sale', 'desc')->limit(5)->get();
        // lấy ra 5 sản phẩm bán chạy nhất 
        $selling_product = DB::table('products')->orderBy('status', 'desc')->limit(5)->get();

        return view('frontEnd.page.product-category', compact('categories', 'products', 'posts', 'banner', 'item_product', 'category_name', 'products_sale', 'selling_product'));
    }
    public function infoUser()
    {
        $categories = Categories::all();
        foreach ($categories as $key => $value) {
            $value["products"] = Products::where('category_id', $value->id)->get();
        }
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        $orders = Order::all();
        $orders_detail = OrderDetail::all();
        // lấy ra 5 sản phẩm khuyến mãi 
        $products_sale = DB::table('products')->orderBy('sale', 'desc')->limit(5)->get();
        // lấy ra 5 sản phẩm bán chạy nhất 
        $selling_product = DB::table('products')->orderBy('status', 'desc')->limit(5)->get();

        return view('frontEnd.page.user', compact('categories', 'products', 'posts', 'banner', 'products_sale', 'orders', 'orders_detail', 'selling_product'));
    }
    public function index(Request $request)
    {
        $categories = Categories::all();
        foreach ($categories as $key => $value) {
            $value["products"] = Products::where('category_id', $value->id)->get();
        }
        $posts = Posts::all();
        $banner = Banner::all();
        // lấy ra 5 sản phẩm khuyến mãi 
        $products_sale = DB::table('products')->orderBy('sale', 'desc')->limit(5)->get();
        $keyword = $request->input('search');
        $products = Products::where('name', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->get();
        // lấy ra 5 sản phẩm bán chạy nhất 
        $selling_product = DB::table('products')->orderBy('status', 'desc')->limit(5)->get();

        return view('frontEnd.page.search', compact('products', 'categories', 'banner', 'posts', 'products_sale', 'selling_product'));
    }
    public function getProducts()
    {
        $categories = Categories::all();
        foreach ($categories as $key => $value) {
            $value["products"] = Products::where('category_id', $value->id)->get();
        }
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        // lấy ra 5 sản phẩm khuyến mãi 
        $products_sale = DB::table('products')->orderBy('sale', 'desc')->limit(5)->get();
        // lấy ra 5 sản phẩm bán chạy nhất 
        $selling_product = DB::table('products')->orderBy('status', 'desc')->limit(5)->get();

        return view('frontEnd.page.products', compact('categories', 'products', 'posts', 'banner', 'products_sale', 'selling_product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function getProductDetail($id)
    {
        $categories = Categories::all();
        foreach ($categories as $key => $value) {
            $value["products"] = Products::where('category_id', $value->id)->get();
        }
        $item_product = Products::find($id);
        $products = Products::where('category_id', $item_product->category_id)->get();
        $posts = Posts::all();
        $banner = Banner::all();
        // lấy ra 5 sản phẩm khuyến mãi 
        $products_sale = DB::table('products')->orderBy('sale', 'desc')->limit(5)->get();
        // lấy ra 5 sản phẩm bán chạy nhất 
        $selling_product = DB::table('products')->orderBy('status', 'desc')->limit(5)->get();

        return view('frontEnd.components.productDetail', compact('categories', 'products', 'posts', 'banner', 'item_product', 'products_sale', 'selling_product'));
    }
    public function getListPosts()
    {
        $categories = Categories::all();
        foreach ($categories as $key => $value) {
            $value["products"] = Products::where('category_id', $value->id)->get();
        }
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        // lấy ra 5 sản phẩm khuyến mãi 
        $products_sale = DB::table('products')->orderBy('sale', 'desc')->limit(5)->get();
        // lấy ra 5 sản phẩm bán chạy nhất 
        $selling_product = DB::table('products')->orderBy('status', 'desc')->limit(5)->get();

        return view('frontEnd.page.posts', compact('categories', 'products', 'posts', 'banner', 'products_sale', 'selling_product'));
    }
    public function getDetailPosts($id)
    {
        $categories = Categories::all();
        foreach ($categories as $key => $value) {
            $value["products"] = Products::where('category_id', $value->id)->get();
        }
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        $item_posts = Posts::find($id);
        // lấy ra 5 sản phẩm khuyến mãi 
        $products_sale = DB::table('products')->orderBy('sale', 'desc')->limit(5)->get();
        // lấy ra 5 sản phẩm bán chạy nhất 
        $selling_product = DB::table('products')->orderBy('status', 'desc')->limit(5)->get();

        return view('frontEnd.page.postDetail', compact('categories', 'products', 'posts', 'banner', 'item_posts', 'products_sale', 'selling_product'));
    }


    // thông tin liên hệ
    public function getContact()
    {
        $categories = Categories::all();
        foreach ($categories as $key => $value) {
            $value["products"] = Products::where('category_id', $value->id)->get();
        }
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        // lấy ra 5 sản phẩm khuyến mãi 
        $products_sale = DB::table('products')->orderBy('sale', 'desc')->limit(5)->get();
        // lấy ra 5 sản phẩm bán chạy nhất 
        $selling_product = DB::table('products')->orderBy('status', 'desc')->limit(5)->get();
        return view('frontEnd.page.contact', compact('categories', 'products', 'posts', 'banner', 'products_sale', 'selling_product'));
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
