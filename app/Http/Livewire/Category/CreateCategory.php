<?php

namespace App\Http\Livewire\Category;

use App\Models\Categories;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateCategory extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public function submit()
    {
        $this->validate(
            [
                'name' => 'required|string',
                'image' => 'required',
            ],
            [
                'name.required' => 'Trường tên tên sản phẩm là bắt buộc.',
                'image.required' => 'Trường ảnh sản phẩm là bắt buộc.',
            ]
        );
        if ($this->image) {
            $image = $this->image;
            $ext = $this->image->extension();
            $file_name = time() . '-' . 'product.' . $ext;
            $this->image->storeAs('uploads', $file_name, 'public');
            $this->image = $file_name;
        }
        $create_categore = Categories::create(
            [
                'name' => $this->name,
                'image' =>  $this->image,
            ]
        );
        $create_categore->save();
        $this->emit('success', 'Thêm danh mục thành công');
        $this->reset(['name', 'image']);
    }
    public function render()
    {
        return view('livewire.category.create-category');
    }
}
