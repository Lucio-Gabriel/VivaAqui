<?php

namespace App\Livewire\Pages\Contacts;

use Livewire\Component;
use App\Models\Contact;
use Livewire\Attributes\Validate;

class Index extends Component
{

    #[Validate('required')]
    public $email = '';

    #[Validate('required')]
    public $description = '';

    public function save()
    {
        $this->validate();

        Contact::create
        (
            $this->only(['email', 'description'])
        );

        return $this->redirect(route('contacts.house'));
    }

    public function render()
    {
        return view('livewire.pages.contacts.index')
            ->layout('layouts.app');
    }
}
