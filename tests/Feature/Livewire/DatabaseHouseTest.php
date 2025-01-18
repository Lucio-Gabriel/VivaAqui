<?php

use App\Livewire\Pages\Dashboard\Index;
use App\Livewire\Pages\RegisterHouse\Create;
use App\Livewire\Pages\RegisterHouse\Edit;
use App\Models\House;
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

it('should be able to update a houses', function () {
    $house = House::factory()->create([
        'title' => 'Casa 1',
        'city' => 'Cidade 1',
        'price' => 100,
        'email' => 'teste@gmail.com',
        'description' => 'description',
    ]);

    Livewire(Edit::class, ['house' => $house])
        ->set('title', 'Casa atualizada')
        ->set('city', 'Cidade atualizada')
        ->set('price', 200)
        ->set('email', 'testenovo@gmail.com')
        ->set('description', 'Descricao atualizada')
        ->call('save');

    expect($house)
        ->refresh()
        ->title->toBe('Casa atualizada')
        ->city->toBe('Cidade atualizada')
        ->price->toBe(200)
        ->email->toBe('testenovo@gmail.com')
        ->description->toBe('Descricao atualizada');
});

it('should be able to delete a product', function () {
   $house = House::factory()->create();

   livewire(Index::class)
       ->call('deleteHouse', $house->id);

   expect(House::find($house->id))->toBeNull();
});


