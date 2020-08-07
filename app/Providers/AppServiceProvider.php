<?php

namespace Elbow\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('pagination.tailwind-default');
        Paginator::defaultSimpleView('pagination.tailwind-simple');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {        
        if (config('app.env') != 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }


}
