<?php

namespace App\Livewire\Pages\RegisterHouse;

use App\Models\House;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public House $house;

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

    public function mount()
    {
        $this->title = $this->house->title;
        $this->city = $this->house->city;
        $this->price = $this->house->price;
        $this->email = $this->house->email;
        $this->description = $this->house->description;
    }

    public function save()
    {
        $this->validate();

        $this->house->update([
            'title' => $this->title,
            'city' => $this->city,
            'price' => $this->price,
            'email' => $this->email,
            'description' => $this->description,
        ]);

        $this->redirect(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.pages.register-house.edit')
            ->layout('layouts.app');
    }
}
