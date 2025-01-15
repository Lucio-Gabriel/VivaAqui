<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', \App\Livewire\Pages\Dashboard\Index::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/register-houses', \App\Livewire\Pages\RegisterHouse\Create::class)
    ->middleware(['auth', 'verified'])
    ->name('register.house');

Route::get('/edit-houses/{house}', \App\Livewire\Pages\RegisterHouse\Edit::class)
    ->middleware(['auth', 'verified'])
    ->name('edit.house');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
