<?php

namespace App\Http\Livewire\Product;

use App\Models\Categories;
use App\Models\Products;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProduct extends Component
{
    use WithFileUploads;
    public $categories;
    public $name;
    public $product;
    public $image;
    public $price;
    public $description;
    public $sale;
    public $category_id;
    public $status;
    protected $listeners = ['update_user' => 'mount'];

    public function mount($id = null)
    {

        $this->product = Products::where('id', $id)->first();
        if ($this->product) {
            $this->name = $this->product->name;
            $this->price = $this->product->price;
            $this->sale = $this->product->sale;
            $this->category_id = $this->product->category_id;
            $this->description = $this->product->description;
        }
    }
    public function render()
    {
        $this->categories = Categories::all();
        return view('livewire.product.update-product');
    }
    public function submit()
    {
        $this->validate(
            [
                'name' => 'required|string',
                'price' => 'required',
                'category_id' => 'required',
            ],
            [
                'name.required' => 'Trường tên tên sản phẩm là bắt buộc.',
                'price.required' => 'Trường giá sản phẩm là bắt buộc.',
                'category_id.required' => 'Trường danh mục cha là bắt buộc.',
            ]
        );
        if ($this->image) {
            $image = $this->image;
            $ext = $this->image->extension();
            $file_name = time() . '-' . 'product.' . $ext;
            $this->image->storeAs('uploads', $file_name, 'public');
            $this->image = $file_name;
        }

        $this->product->name = $this->name;
        $this->product->price = $this->price;
        $this->product->category_id = $this->category_id;
        $this->product->sale = $this->sale ?? 0;
        if ($this->image) {
            $this->product->image = $this->image;
        }
        if ($this->description) {
            $this->product->description = $this->description;
        }
        $this->product->save();
        $this->emit('success', 'Sửa sản phẩm thành công');
        $this->reset(['name', 'price', 'category_id', 'status', 'description', 'image']);

    }
}
