<?php

namespace Kriyar\CambodiaGeographic;

use Illuminate\Support\ServiceProvider;

class CambodiaGeographicServiceProvider extends ServiceProvider
{
  /**
  * Indicates if loading of the provider is deferred.
  *
  * @var bool
  */
  protected $defer = false;

  /**
  * Register services.
  *
  * @return void
  */
  public function register()
  {
    $this->app->make('Kriyar\CambodiaGeographic\CityProvinceApiController');
    $this->app->make('Kriyar\CambodiaGeographic\DistrictApiController');
    $this->app->make('Kriyar\CambodiaGeographic\CommuneApiController');
    $this->app->make('Kriyar\CambodiaGeographic\VillageApiController');
  }

  /**
  * Bootstrap services.
  *
  * @return void
  */
  public function boot()
  {
    $this->loadRoutesFrom(__DIR__.'/routes/api.php');
    $this->publishes([__DIR__.'/database/migrations' => database_path('migrations')], 'cambodia-geographic-migrations');
    $this->publishes([__DIR__.'/database/seeds' => database_path('seeds')], 'cambodia-geographic-seeds');
  }
}
