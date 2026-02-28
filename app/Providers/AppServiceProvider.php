<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // ← أضف هذا السطر
use Illuminate\Support\Facades\View;
// use Illuminate\Support\Str;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

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
        //
        Schema::defaultStringLength(191); // ← أضف هذا السطر
        View::share('appName', 'HyaTi Med'); // ← أضف هذا السطر}
        View::share('currentYear', date('Y')); // ← أضف هذا السطر

        // Add upper case test
        Collection::macro('toUppers', function () {
        return $this->map(fn ($item) => strtoupper($item));
        });
        Str::macro('toSlug', function ($string) {
            return strtolower(preg_replace('/\s+/', '-', trim($string)));
        });

    }
}