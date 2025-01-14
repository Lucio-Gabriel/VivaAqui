<?php

namespace App\Livewire\Pages\RegisterHouse;

use App\Models\House;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required')]
    public $title;
    #[Validate('required')]
    public $city;
    #[Validate('required')]
    public $price;

    #[Validate('required')]
    public $email;

    #[Validate('required')]
    public $description;

    public function save()
    {
        $this->validate();

        House::create(
            $this->only(['title', 'city', 'price','email', 'description'])
        );

        return $this->redirect('dashboard');
    }

    public function render()
    {
        return view('livewire.pages.register-house.create')
            ->layout('layouts.app ');
    }
}
