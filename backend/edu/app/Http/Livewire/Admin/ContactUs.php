<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('livewire.admin.contact-us', compact('contacts'))->layout('layout.admin-app');
    }
}
