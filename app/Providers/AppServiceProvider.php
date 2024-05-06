<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TallStackUi\Facades\TallStackUi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TallStackUi::personalize()
            ->avatar()
            ->block('wrapper.sizes.lg', 'size-32 text-2xl')
            ->block('content.image.sizes.lg', 'size-24 text-2xl');
    }
}
