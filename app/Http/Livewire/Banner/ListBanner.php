<?php

namespace App\Http\Livewire\Banner;

use App\Models\Banner;
use Livewire\Component;

class ListBanner extends Component
{
    public $search = '';
    public $perpage = 10;
    public $banner;
    protected $listeners = [
        'success' => 'updateBanner',
    ];
    public function render()
    {
        return view('livewire.banner.list-banner', ['list_banner' => Banner::search($this->search)->paginate($this->perpage)]);
    }
    public function updateBanner()
    {
        $this->banner = Banner::all();
    }
    public function delete($id)
    {
        $banner = Banner::find($id);
        if (!is_null($banner)) {
            $banner->delete();
        }
        $this->emit('success', 'Xóa sản phẩm thành công');
    }
}
