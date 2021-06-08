<?php

namespace NH1816\Polis;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;

class PolisServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Kernel $kernel)
    {
        $this->publishes([
            __DIR__.'/config/polis.php' => config_path('polis.php'),
        ], 'polis');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'polis');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('polis', function()
        {
            return new \NH1816\Polis\Facades\Polis;
        });

        $this->mergeConfigFrom(__DIR__.'/config/polis.php', 'polis');
    }
}
