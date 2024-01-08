<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contacts;
use Livewire\Component;

class ListContact extends Component
{
    public $search = '';
    public $perpage = 10;
    public $contacts;
    protected $listeners = [
        'success' => 'update',
    ];
    public function render()
    {
        return view('livewire.contact.list-contact', ['list_contact' => Contacts::search($this->search)->paginate($this->perpage)]);
    }
    public function update()
    {
        $this->contacts = Contacts::all();
    }
    public function delete($id)
    {
        $contacts = Contacts::find($id);
        if (!is_null($contacts)) {
            $contacts->delete();
        }
        $this->emit('success', 'Xóa sản phẩm thành công');
    }
}
