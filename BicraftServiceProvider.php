<?php

namespace Bideyesa\Bicraft;

use Illuminate\Support\ServiceProvider;

class BicraftServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../views' => resource_path('views'),
        ], 'bicraft');
    }

    public function register()
    {
    }
}
