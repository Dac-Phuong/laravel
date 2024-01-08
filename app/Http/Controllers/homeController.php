<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Products;
use App\Models\User;

class homeController extends Controller
{
    public function home()
    {
        $total_order = Order::get();
        $total_customer = User::get();
        $total_product = Products::get();
        $total_price = Order::sum('total_price');
        return view('admin.index', ['total_order' => $total_order, 'total_customer' => $total_customer, 'total_product' => $total_product, 'total_price' => $total_price]);
    }
}
