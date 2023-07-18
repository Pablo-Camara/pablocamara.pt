<?php

namespace App\Providers;

use App\View\Composers\AboutMeComposer;
use App\View\Composers\HomeComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('home', HomeComposer::class);
        View::composer('about-me', AboutMeComposer::class);
    }
}
