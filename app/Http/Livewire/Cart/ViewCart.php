<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class ViewCart extends Component
{
    public $item_Cart;

    public function decrease($id)
    {
        $cart = session()->get('cart', []);
        if (array_key_exists($id, $cart)) {
            if ($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity'] -= 1;
                session()->put('cart', $cart);
            }
        }
    }
    public function increase($id)
    {
        $cart = session()->get('cart', []);
        if (array_key_exists($id, $cart)) {
            $cart[$id]['quantity'] += 1;
            session()->put('cart', $cart);
        }
    }
    public function deleteCart($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        $this->emit('succsess', 'Xóa thành công');
    }

    public function render()
    {
        $this->item_Cart = session('cart');
        return view('livewire.cart.view-cart');
    }
    public function update()
    {
        $this->item_Cart = session('cart');
    }
}
