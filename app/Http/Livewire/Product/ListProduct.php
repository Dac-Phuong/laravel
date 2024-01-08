<?php

namespace App\Http\Livewire\Product;

use App\Models\Categories;
use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;

class ListProduct extends Component
{
    use WithPagination;
    public $search = '';
    public $perpage = 10;
    public $categories;
    public $list_products;
    protected $listeners = [
        'success' => 'updateProducts',
    ];
    public function render()
    {
        $this->categories = Categories::all();
        return view('livewire.product.list-product', [
            'list_product' => Products::search($this->search)->paginate($this->perpage)
        ]);
    }
    public function updateProducts()
    {
        $this->list_products = Products::all();
    }
    public function delete($id)
    {
        $user = Products::find($id);
        if (!is_null($user)) {
            $user->delete();
        }
        $this->emit('success', 'Xóa sản phẩm thành công');
    }
}
