<?php

namespace App\Livewire\Pages\Templates;

use App\Models\User;
use Livewire\Component;

class Insight extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.pages.templates.insight')
            ->layout('layouts.default');
    }
}
