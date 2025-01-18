<?php

use App\Livewire\Pages\Dashboard\Index;
use App\Livewire\Pages\RegisterHouse\Create;
use App\Livewire\Pages\RegisterHouse\Edit;
use App\Models\House;
use Livewire\Livewire;

test('class index exist', function () {
    Livewire::test(Index::class)
        ->assertOk()
        ->assertStatus(200);
});

test('class register houses must exist', function () {
    Livewire::test(Create::class)
        ->assertOk()
        ->assertStatus(200);
});

test('class edit houses must exist', function () {
    $house = House::factory()->create();

    Livewire::test(Edit::class, ['house' => $house])
        ->assertStatus(200);
});
