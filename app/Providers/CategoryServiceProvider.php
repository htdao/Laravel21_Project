<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Views\MenuCategoryComposer;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('backend.includes.navbar',MenuCategoryComposer::class);
    }
}
