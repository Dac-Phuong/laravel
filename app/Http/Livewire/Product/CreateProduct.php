<?php

namespace App\Http\Livewire\Product;

use App\Models\Categories;
use App\Models\Products;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $price;
    public $description;
    public $sale;
    public $category_id;
    public $status;
    public $categories;


    public function submit()
    {
        $this->validate(
            [
                'name' => 'required|string',
                'image' => 'required',
                'price' => 'required',
                'category_id' => 'required',
            ],
            [
                'name.required' => 'Trường tên tên sản phẩm là bắt buộc.',
                'image.required' => 'Trường ảnh sản phẩm là bắt buộc.',
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
        $create_product = Products::create(
            [
                'name' => $this->name,
                'price' => $this->price,
                'category_id' => $this->category_id,
                'sale' => $this->sale ?? 0,
                'status' => $this->status ?? 1,
                'image' =>  $this->image,
                'description' => $this->description ?? '',
            ]
        );
        $create_product->save();
        $this->emit('success', 'Thêm sản phẩm thành công');
        $this->reset(['name', 'price', 'category_id', 'status', 'description','image']);
    }
    public function render()
    {
        $this->categories = Categories::all();
        return view('livewire.product.create-product');
    }
}
