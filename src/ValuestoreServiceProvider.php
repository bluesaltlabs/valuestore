<?php

namespace BlueSaltLabs\Valuestore;

use Illuminate\Support\ServiceProvider;

/**
 * Class ValuestoreServiceProvider
 * @package BlueSaltLabs\Valuestore
 */
class ValuestoreServiceProvider extends ServiceProvider //implements DeferrableProvider
{
    public function isDeferred()
    {
        // Remove this and uncomment DeferrableProvider after dropping support
        // for Laravel 5.7 and below
        return true;
    }

    /**
     * Get the services provided for deferred loading.
     *
     * @return array
     */
    public function provides(): array
    {
        return [Valuestore::class];
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/valuestore.php', 'valuestore');

        // Register Manager class singleton with the app container
        $this->app->singleton(Valuestore::class, config('valuestore.manager-class'));
    }


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

        // Support both Valuestore:: and $valuestore-> syntax by making $valuestore variable available
        /** @noinspection PhpUnusedLocalVariableInspection */
        $valuestore = $this->app->make(Valuestore::class);
    }

}
