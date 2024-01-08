<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class ListOrder extends Component
{
    public $search = '';
    public $perpage = 10;
    public function render()
    {
        return view('livewire.order.list-order', ['list_order' => Order::search($this->search)->paginate($this->perpage)]);
    }
    public function update_status($id)
    {
        $orders = Order::findOrFail($id);
        if ($orders->status == 1) {
            $orders->status = '2';
            $orders->save();
        } else {
            $orders->status = '1';
            $orders->save();
        }
    }
}
