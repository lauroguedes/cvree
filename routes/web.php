<?php

use App\Livewire\Pages\PublicCv;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/cv/{user}', PublicCv::class);

require __DIR__.'/auth.php';
