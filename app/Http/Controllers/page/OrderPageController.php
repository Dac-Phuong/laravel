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
                'status' => 'pending',
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
                    'status' => 'pending',
                ]);
                $order->order_detail()->save($order_details);
                $totalPrice += ($product['quantity'] * $product['price'] + $ship);
            }
            $order->total_price = $totalPrice;
            $order->save();
        }
        return redirect()->back()->with('message', 'Đơn hàng của bạn đã được đặt thành công.');
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
        return view('frontEnd.page.orders_Detail', compact('orders', 'orders_detail', 'categories', 'posts', 'banner', 'products_sale', 'products'));
    }
}
