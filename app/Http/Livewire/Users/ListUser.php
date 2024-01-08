<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListUser extends Component
{
    use WithPagination;
    protected $listeners = [
        'success' => 'updateUser',
    ];
    public $list_users;
    public $search = '';
    public function render()
    {
        return view('livewire.users.list-user', [
            'list_user' => User::search($this->search)->where('roles', 0)->paginate(10)
        ]);
    }
    public function updateUser()
    {
        $this->list_users = User::all();
    }
    public function delete($id)
    {
        $user = User::find($id);
        if (!is_null($user)) {
            $user->delete();
        }
        $this->emit('success', 'Xóa người xem thành công');
    }
}
