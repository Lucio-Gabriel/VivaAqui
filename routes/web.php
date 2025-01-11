<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', \App\Livewire\Pages\Dashboard\Index::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
