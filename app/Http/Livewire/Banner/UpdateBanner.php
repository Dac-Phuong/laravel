<?php

namespace App\Http\Livewire\Banner;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateBanner extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $banner;
    protected $listeners = ['update_user' => 'mount'];

    public function mount($id = null)
    {

        $this->banner = Banner::where('id', $id)->first();
        if ($this->banner) {
            $this->name = $this->banner->name;
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
        $this->banner->name = $this->name;
        if ($this->image) {
            $this->banner->image =  $this->image;
        }
        $this->banner->save();
        $this->emit('success', 'Sửa banner thành công');
        $this->reset(['name', 'image']);
    }
    public function render()
    {
        return view('livewire.banner.update-banner');
    }
}
