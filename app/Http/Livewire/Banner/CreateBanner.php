<?php

namespace App\Http\Livewire\Banner;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBanner extends Component
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
            $file_name = time() . '-' . 'banner.' . $ext;
            $this->image->storeAs('uploads', $file_name, 'public');
            $this->image = $file_name;
        }
        $create_banner = Banner::create(
            [
                'name' => $this->name,
                'image' =>  $this->image,
            ]
        );
        $create_banner->save();
        $this->emit('success', 'Thêm banner thành công');
        $this->reset(['name', 'image']);
    }
    public function render()
    {
        return view('livewire.banner.create-banner');
    }
}
