<?php

namespace App\Providers;

use App\Language;
use Illuminate\Support\ServiceProvider;

class PanelProvider extends ServiceProvider
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
        view()->composer(['layouts.admin', 'admin.blog.index'], function ($view) {

            $languages = Language::all();

            $view->with('languages', $languages);
        });
    }
}
