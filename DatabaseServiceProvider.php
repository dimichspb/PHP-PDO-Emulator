<?php
namespace dimichspb\PHP_PDO_Emulator;

use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('db.factory', function ($app) {
            return new ConnectionFactory($app);
        });
    }
}