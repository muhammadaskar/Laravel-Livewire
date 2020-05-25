<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactUpdate extends Component
{

    public $name;
    public $phone;
    public $contactId;

    protected $listeners = [
        'getContact' => 'showContact'
    ];

    public function render()
    {
        return view('livewire.contact-update');
    }

    public function showContact($contact)
    {
        $this->name = $contact['name'];
        $this->phone = $contact['phone'];
        $this->contactId = $contact['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:5',
            'phone' => 'required|min:12'
        ]);

        if ($this->contactId) {
            $contact = Contact::find($this->contactId);

            $data = [
                'name' => $this->name,
                'phone' => $this->phone
            ];

            $contact->update($data);
            $this->resetInput();
            $this->emit('contactUpdate', $contact);
        }
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }
}
