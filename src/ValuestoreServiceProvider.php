<?php

namespace BlueSaltLabs\Valuestore;

use Illuminate\Support\ServiceProvider;

/**
 * Class ValuestoreServiceProvider
 * @package BlueSaltLabs\Valuestore
 */
class ValuestoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/valuestore.php' => config_path('valuestore.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/valuestore.php', 'valuestore');
    }

}
