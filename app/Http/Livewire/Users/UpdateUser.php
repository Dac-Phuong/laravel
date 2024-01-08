<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UpdateUser extends Component
{
    public $name;
    public $email;
    public $phone;
    public $password;
    public $user;
    protected $listeners = ['update_user' => 'mount'];

    public function mount($id = null)
    {
        $this->user = User::where('id', $id)->first();
        if ($this->user) {
            $this->name = $this->user->name;
            $this->email = $this->user->email;
            $this->phone = $this->user->phone;
            $this->password = '';
        }
    }
    public function submit()
    {
        $this->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|numeric|regex:/^\d{10,}$/',
            ],
            [
                'name.required' => 'Trường tên tài khoản là bắt buộc.',
                'email.required' => 'Trường email người dùng là bắt buộc.',
                'email.email' => 'Trường email phải là địa chỉ email hợp lệ.',
                'phone.regex' => 'Định dạng trường điện thoại không hợp lệ.',
                'phone.required' => 'Trường số điện thoại là bắt buộc.',
                'phone.numeric' => 'Vui lòng nhập chính xác số điện thoại',
            ]
        );
        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->phone = $this->phone;
        if ($this->password) {
            $this->user->password = Hash::make($this->password);
        }
        $this->user->save();
        $this->emit('success', 'Sửa người dùng thành công');
    }
    public function render()
    {
        return view('livewire.users.update-user');
    }
    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
