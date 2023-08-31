<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Category;

use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // List categories navigation bar
        View::composer('*', function($view)
        {
            $categories= Category::all();
            $view->with('categories', $categories);
        });
    }
}
