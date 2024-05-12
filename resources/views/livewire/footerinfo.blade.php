<?php

use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

    new class extends Component {
        #[Computed]
        public function getInfo()
        {
            $year = '2024';

            $year = now()->format('Y') !== $year
                ? $year . ' - ' . now()->format('Y')
                : $year;

            return "© $year - " . config('app.name');
        }
    };
?>

<footer>
    <p class="text-center text-gray-700 text-sm">
        {{ $this->getInfo }} by <a class="underline hover:opacity-60" href="https://github.com/lauroguedes" target="_blank">Lauro Guedes</a>
    </p>
</footer>
