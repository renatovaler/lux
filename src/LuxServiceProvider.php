<?php

namespace RenatoValer\Lux

use Illuminate\Support\ServiceProvider;

class LuxServiceProvider extends ServiceProvider
{

    public function boot()
    {
        
    }

    public function register()
    {
        $this->app->singleton('lux', function() {
            return new Lux();
        });
    }
}
