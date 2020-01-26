<?php

namespace Elbow\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Elbow\Persistence;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DB::connection('mysql')->setSchemaGrammar(new Persistence\MySqlGrammar());

        Blueprint::macro('realBinary', function($column, $length = 32) {
            return $this->addColumn('realBinary', $column, compact('length'));
        });
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
            $this->app->register(\Laravel\Dusk\DuskServiceProvider::class);
        }
    }
}
