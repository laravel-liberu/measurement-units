<?php

namespace LaravelLiberu\MeasurementUnits;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->load()
            ->publish();
    }

    private function load()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        return $this;
    }

    private function publish()
    {
        $this->publishes([
            __DIR__.'/../database/factories' => database_path('factories'),
        ], ['measurement-unit-factories', 'liberu-factories']);

        $this->publishes([
            __DIR__.'/../database/seeders' => database_path('seeders'),
        ], ['measurement-unit-seeder',  'liberu-seeders']);
    }
}
