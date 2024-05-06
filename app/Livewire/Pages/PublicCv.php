<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class PublicCv extends Component
{
    public User $user;

    public function mount(User $user): void
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.pages.public-cv')
            ->layout('layouts.default');
    }
}
