<?php

namespace App\Http\Livewire\Category;

use App\Models\Categories;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateCategory extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $category;
    protected $listeners = ['update_user' => 'mount'];

    public function mount($id = null)
    {

        $this->category = Categories::where('id', $id)->first();
        if ($this->category) {
            $this->name = $this->category->name;
        }
    }
    public function submit()
    {
        $this->validate(
            [
                'name' => 'required|string',
            ],
            [
                'name.required' => 'Trường tên tên sản phẩm là bắt buộc.',
            ]
        );
        if ($this->image) {
            $image = $this->image;
            $ext = $this->image->extension();
            $file_name = time() . '-' . 'product.' . $ext;
            $this->image->storeAs('uploads', $file_name, 'public');
            $this->image = $file_name;
        }
        $this->category->name = $this->name;
        if ($this->image) {
            $this->category->image =  $this->image;
        }
        $this->category->save();
        $this->emit('success', 'Sửa danh mục thành công');
        $this->reset(['name', 'image']);
    }
    public function render()
    {
        return view('livewire.category.update-category');
    }
}
