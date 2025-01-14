<?php

namespace App\Livewire\Pages\RegisterHouse;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.pages.register-house.create')
            ->layout('layouts.app');
    }
}
