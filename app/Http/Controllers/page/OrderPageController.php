<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Categories;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Posts;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderPageController extends Controller
{
    public function createOrder(Request $request)
    {
        $request->validate([
            'districts_id' => 'required',
            'provinces_id' => 'required',
            'address' => 'required',
        ], [
            'districts_id.required' => 'Tỉnh thành không được để trống !',
            'provinces_id.required' => 'Quận huyện không được để trống !',
            'address.required' => 'Địa chỉ không được để trống !'
        ]);
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $data = [
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'total_price' => 0,
                'provinces_id' => $request->provinces_id,
                'districts_id' => $request->districts_id,
                'user_id' => $user_id,
                'status' => '0',
            ];
            $order = Order::create($data);
            $cart = session()->get('cart');
            $totalPrice = 0;
            $ship = 30000;
            foreach ($cart as $id => $product) {
                $order_details = new OrderDetail([
                    'name_product' => $product['name'],
                    'products_id' => $id,
                    'quantity' => $product['quantity'],
                    'price' => $product['price'],
                    'status' => '0',
                ]);
                $order->order_detail()->save($order_details);
                $totalPrice += ($product['quantity'] * $product['price']);
            }
            $order->total_price = $totalPrice + $ship;
            $order->save();
        }
        return redirect()->route('getUser')->with('message', 'Đơn hàng của bạn đã được đặt thành công.');
    }
    public function orders_detail($id)
    {
        $categories = Categories::all();
        $posts = Posts::all();
        $banner = Banner::all();
        $products_sale = DB::table('products')
            ->where('sale', '>=', 5)
            ->orderBy('sale', 'desc')
            ->take(5)
            ->get();

        $orders = Order::find($id);
        $orders_detail = OrderDetail::all();
        $products = Products::latest()->paginate(10);

        $topProducts = DB::table('order_details')
            ->select('products_id', DB::raw('SUM(quantity) as total_ordered'))
            ->groupBy('products_id')
            ->orderByDesc('total_ordered')
            ->limit(5)
            ->get();
        $productIds = $topProducts->pluck('products_id');
        $selling_product = Products::whereIn('id', $productIds)->get();
        return view('frontEnd.page.orders_Detail', compact('orders', 'orders_detail', 'categories', 'posts', 'banner', 'products_sale', 'products', 'selling_product'));
    }
}
