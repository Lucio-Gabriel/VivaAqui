<?php

namespace App\Livewire\Pages\Services;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.services.index')
            ->layout('layouts.app ');
    }
}
