<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    public array $links = [
        [
            'icon' => 'sparkles',
            'title' => 'Laravel',
            'url' => 'https://laravel.com',
        ],
        [
            'icon' => 'finger-print',
            'title' => 'Livewire',
            'url' => 'https://laravel-livewire.com',
        ],
        [
            'icon' => 'globe-asia-australia',
            'title' => 'Tailwind CSS',
            'url' => 'https://tailwindcss.com',
        ],
    ];
};

?>

<div class="text-center">
    <h2 class="flex justify-center space-x-4 items-center text-gray-500 mb-2">
        <span class="text-sm font-bold">○</span>
        <span class="uppercase font-light text-xl">Links</span>
        <span class="text-sm font-bold">○</span>
    </h2>
    <ul>
        @foreach ($links as $link)
            <li>
                <x-tslink href="{{ $link['url'] }}"
                          text="{{ $link['title'] }}"
                          icon="{{ $link['icon'] }}" />
            </li>
        @endforeach
    </ul>
</div>
