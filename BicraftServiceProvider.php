<?php

namespace Bideyesa\Bicraft;

use Illuminate\Support\ServiceProvider;

class BicraftServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/public' => public_path(),
            __DIR__.'/resources' => resource_path(),
            __DIR__.'/app' => app_path(),
        ], 'bicraft');

        $viteConfigPath = base_path('vite.config.js');
        
        if (file_exists($viteConfigPath)) {
            $viteConfig = file_get_contents($viteConfigPath);
            $updatedConfig = str_replace(
                "['resources/css/app.css', 'resources/js/app.js']",
                "['resources/sass/app.scss', 'resources/js/app.js']",
                $viteConfig
            );

            file_put_contents($viteConfigPath, $updatedConfig);
        }
    }

    public function register()
    {
        // Logic lainnya jika ada
    }
}
