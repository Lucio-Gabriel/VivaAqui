<?php

namespace App\Livewire\Pages\Contacts;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.contacts.index')
            ->layout('layouts.app');
    }
}
