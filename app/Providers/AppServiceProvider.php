<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\RunGetGameId1Min;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->commands([
            RunGetGameId1Min::class,
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
