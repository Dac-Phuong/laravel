<?php

namespace App\Http\Livewire\Post;

use App\Models\Posts;
use Livewire\Component;
use Livewire\WithPagination;

class ListPost extends Component
{
    use WithPagination;
    public $search = '';
    public $posts;
    public $perpage = 10;
    protected $listeners = [
        'success' => 'updatePost',
    ];
    public function render()
    {
        return view('livewire.post.list-post', ['list_post' => Posts::search($this->search)->paginate($this->perpage)]);
    }
    public function delete($id)
    {
        $user = Posts::find($id);
        if (!is_null($user)) {
            $user->delete();
        }
        $this->emit('success', 'Xóa sản phẩm thành công');
    }
    public function updatePost()
    {
        $this->posts = Posts::all();
    }
}
