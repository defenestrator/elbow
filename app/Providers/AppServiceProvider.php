<?php

namespace Elbow\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Elbow\Persistence\MySqlGrammar;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DB::connection('mysql')->setSchemaGrammar(new MySqlGrammar());

        Blueprint::macro('realBinary', function($column, $length) {
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
        // Passport::ignoreMigrations();
        
        if (config('app.env') !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
            $this->app->register(\Laravel\Dusk\DuskServiceProvider::class);
        }
    }
}
