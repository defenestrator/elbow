<?php

namespace Elbow\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Inertia\Inertia;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Inertia::setRootView('layouts.inertia');
        Inertia::version(function () {
            return md5_file(public_path('mix-manifest.json'));
        });

        Paginator::defaultView('vendor.pagination.simple-bootstrap-4');
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
