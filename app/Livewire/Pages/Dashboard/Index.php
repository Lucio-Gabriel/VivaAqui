<?php

namespace App\Livewire\Pages\Dashboard;

use App\Models\House;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{

    #[Computed]
    public function houses(): Collection
    {
        return House::get();
    }

    public function render()
    {
        return view('livewire.pages.dashboard.index')
            ->layout('layouts.app');
    }
}
