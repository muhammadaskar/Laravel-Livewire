<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;
    public $statusUpdate = false;

    public $cari;
    protected $updatesQueryString = ['cari'];

    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactUpdate' => 'handleUpdated'
    ];

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => $this->cari === null ? Contact::latest()->paginate(5) : Contact::where('name', 'like', '%' . $this->cari . '%')->paginate(5)
        ]);
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        session()->flash('message', 'Contact ' . $contact['name'] . ' was deleted');
    }

    public function handleStored($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was stored');
    }

    public function handleUpdated($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was updated');
    }
}
