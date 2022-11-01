<?php

namespace Nehal\Motivation\Providers;

use Closure;
use Illuminate\Support\ServiceProvider;
use Nehal\Motivation\Quote;

class MotivationAppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            $this->basePath('config/motivation-quotes.php') => base_path('config/motivation-quotes.php')
        ], 'motivation-config');
    }

    public function register()
    {
        $this->app->bind('quote', function(){
            return new Quote;
        });

        $this->mergeConfigFrom( $this->basePath('config/motivation-quotes.php'), 'motivation-quotes');
    }

    protected function basePath($path = '')
    {
        return __DIR__ . '/../../' . $path;
    }
}