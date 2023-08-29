<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Categories;
use App\Models\District;
use App\Models\Posts;
use App\Models\Products;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutPageController extends Controller
{
    public function checkoutPage()
    {
        $categories = Categories::all();
        $products = Products::latest()->paginate(10);
        $posts = Posts::all();
        $banner = Banner::all();
        $district = District::all();
        $province = Province::all();
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
        return view('frontEnd.page.checkout', compact('categories', 'products', 'posts', 'banner', 'products_sale', 'province', 'district', 'selling_product'));
    }
}
