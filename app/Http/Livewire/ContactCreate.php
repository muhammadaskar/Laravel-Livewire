<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public $phone;

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store()
    {

        $this->validate([
            'name' => 'required|min:5',
            'phone' => 'required|min:12'
        ]);

        $data = [
            'name' => $this->name,
            'phone' => $this->phone
        ];
        $contact = Contact::create($data);

        $this->resetInput();
        $this->emit('contactStored', $contact);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi',
            'phone.required' => 'Phone wajib diisi'
        ];
    }
}
