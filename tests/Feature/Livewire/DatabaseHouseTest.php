<?php

use App\Livewire\Pages\RegisterHouse\Create;
use Livewire\Livewire;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Livewire\livewire;

it('should be able o create a houses', function () {

    Livewire(Create::class)
        ->set('title', 'House 1')
        ->set('city', 'Sao paulo')
        ->set('price', 199)
        ->set('email', 'house@housegmai.com')
        ->set('description', 'Criando house 1')
        ->call('save')
        ->assertHasNoErrors();

    assertDatabaseHas('houses', [
        'title' => 'House 1',
        'city' => 'Sao paulo',
        'price' => 199,
        'email' => 'house@housegmai.com',
        'description' => 'Criando house 1',
    ]);

    assertDatabaseCount('houses', 1);
});

test('should be required', function () {
    Livewire(Create::class)
        ->set('title', null)
        ->set('city', null)
        ->set('price', null)
        ->set('email', null)
        ->set('description', null)
        ->call('save')
        ->assertHasErrors([
           'title' => 'required',
           'city' => 'required',
           'price' => 'required',
           'email' => 'required',
           'description' => 'required',
        ]);
});


