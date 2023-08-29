<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cartPage()
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
        return view('frontEnd.page.cart', compact('categories', 'products', 'posts', 'banner', 'products_sale'));
    }
    public function addToCart($id)
    {
        $product = Products::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'quantity' => $product->quantity,
                'price' => $product->price,
                'image' => $product->image,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Thêm sản phẩm thành công');
    }

    public function updateCart(Request $request, $id)
    {
        $quantity = $request->input('quantity');

        if ($quantity <= 0) {
            return redirect()->back();
        }
        $cart = session()->get('cart', []);
        if (array_key_exists($id, $cart)) {
            $cart[$id]['quantity'] = $quantity;
        }
        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function deleteItemCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('succsess', 'Xóa thành công');
        }
    }
}
