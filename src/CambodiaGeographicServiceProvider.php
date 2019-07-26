<?php

namespace Kriyar\CambodiaGeographic;

use Illuminate\Support\ServiceProvider;

class CambodiaGeographicServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Kriyar\CambodiaGeographic\Http\Api\CityProvinceApiController');
        $this->app->make('Kriyar\CambodiaGeographic\Http\Api\DistrictApiController');
        $this->app->make('Kriyar\CambodiaGeographic\Http\Api\CommuneApiController');
        $this->app->make('Kriyar\CambodiaGeographic\Http\Api\VillageApiController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      $this->loadRoutesFrom(__DIR__.'/routes.php');
      $this->publishes([__DIR__.'/database/migrations' => database_path('migrations')], 'migrations');
      $this->publishes([__DIR__.'/database/seeds' => database_path('seeds')], 'seed');
    }
}
