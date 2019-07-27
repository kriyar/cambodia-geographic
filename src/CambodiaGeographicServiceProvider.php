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
      $this->loadRoutesFrom(__DIR__.'/routes/api.php');
  }

  /**
  * Bootstrap services.
  *
  * @return void
  */
  public function boot()
  {
    $this->publishes([__DIR__.'/database/migrations' => database_path('migrations')], 'cambodia-geographic-migrations');
    $this->publishes([__DIR__.'/database/seeds' => database_path('seeds')], 'cambodia-geographic-seeds');
  }
}
