<?php

namespace App\Http\Livewire\Category;

use App\Models\Categories;
use Livewire\Component;

class ListCategory extends Component
{
    public $search = '';
    public $perpage = 10;
    public $category;
    protected $listeners = [
        'success' => 'updateCategory',
    ];
    public function render()
    {
        return view('livewire.category.list-category', ['list_category' => Categories::search($this->search)->paginate($this->perpage)]);
    }
    public function updateCategory()
    {
        $this->category = Categories::all();
    }
    public function delete($id)
    {
        $category = Categories::find($id);
        if (!is_null($category)) {
            $category->delete();
        }
        $this->emit('success', 'Xóa sản phẩm thành công');
    }
}
