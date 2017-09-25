<?php

namespace Ngiasim\Aramex;

use Illuminate\Support\ServiceProvider;

class AramexServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Ngiasim\Aramex\AramexShipment');
        $this->app->register(
          'Ngiasim\Aramex\AramexServiceProvider'
        );
    }
}
